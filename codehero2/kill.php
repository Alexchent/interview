<?php

$eventId = isset($_GET['eventId']) ? intval($_GET['eventId']) : 1;
$userId = isset($_GET['userId']) ? intval($_GET['userId']) : rand(1, 100000000);

echo kill($userId, $eventId);

function kill($userId, $eventId)
{

    $eventLock = $eventId . "_eventLock";

    $eventCntKey = $eventId . "_eventCnt";  //缓存中数量比数据库中多1个
    $eventCacheyKey = $eventId . "_event";
    $userLogCacheKey = $userId . "_log";
    $userLock = $userId . "_userLock";

    $cache = new Memcached();
    $cache->addServer('localhost', 11211);


    if (!$cache->add($userLock, 1, 20)) {
        return "加锁失败";
    }

    $db = new mysqli();
    $db->connect('127.0.0.1', 'codehero', 'codehero', 'codehero-2');
    $db->set_charset('utf8');


    //@todo: 缓存用户日志
    $res = $db->query("SELECT * FROM `log` WHERE `userId` = {$userId} AND  `eventId` = {$eventId}");
    if ($res->fetch_assoc() > 0) {
        $cache->delete($userLock);
        return "不要太贪心";
    }

    
    $cnt = $cache->decrement($eventCntKey, 1);
    if ($cnt === false) {
        if (!$cache->add($eventLock, 1, 20)) {
            $cache->delete($userLock);
            return "加锁失败";
        }

        $res = $db->query("SELECT * FROM `event` WHERE `id` = {$eventId}");
        $event = $res->fetch_assoc();
        if (!$event) {
            $cache->delete($eventLock);
            $cache->delete($userLock);
            return "活动不存在";
        }
        
        $cnt = $event['remainCnt'];
        
        if (!$cache->add($eventCntKey, $cnt)) {
            $cache->delete($userLock);
            $cache->delete($eventLock);
            return "被人捷足先登";
        }
        
        $cache->delete($eventLock);
    }

    if ($cnt < 1) {
        $cache->delete($userLock);
        return "抢光了";
    }

    $time = time();

    $db->query("BEGIN");
    $db->query("UPDATE `event` SET `remainCnt` = `remainCnt` - 1 WHERE `id` = {$eventId}");
    $db->query("INSERT INTO `log` (`eventId`, `userId`, `createTime`) VALUES ({$eventId}, {$userId}, {$time})");
    $db->query("COMMIT");
    $cache->delete($userLock);

    return "Success";
}