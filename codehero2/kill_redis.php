<?php
/**
 * 实现codehero2——活动秒杀
 *
 *
 * 连接redis的命令  redis-cli -h 127.0.0.1 -p 6379
 *
 * 压力测试：ab -c 10 -n 1000 http://localhost:8888/interview/codehero2/kill_redis.php
 */

$eventId = isset($_GET['eventId']) ? intval($_GET['eventId']) : 1;
$userId = isset($_GET['userId']) ? intval($_GET['userId']) : rand(1, 100000000);

echo kill($userId, $eventId);

function kill($userId, $eventId)
{

    $eventLock = $eventId . "_eventLock";

    $eventCntKey = $eventId . "_eventCnt";
    $userLock = $userId . "_userLock";


    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);
    if (!$redis->setnx($userLock, 1) && $redis->expire($userLock, 20)) {
        return "您已经参与过了！";
    }

    $db = new mysqli();
    $db->connect('127.0.0.1', 'root', 'root', 'codehero', 8889);
    $db->set_charset('utf8');
    //用户秒杀记录
    $res = $db->query("SELECT * FROM `log` WHERE `userId` = {$userId} AND  `eventId` = {$eventId}");
    if ($res->fetch_assoc() > 0) {
//        $redis->delete($userLock);
        return "您已经参与过了！";
    }

    //活动是否缓存
    $eventExist = $redis->exists($eventLock);
    if (!$eventExist) {
        echo "\n";
        $res = $db->query("SELECT * FROM `event` WHERE `id` = {$eventId} AND `remainCnt` > 0 ");
        $event = $res->fetch_assoc();
        if (!$event) {
            $redis->delete($eventLock);
            $redis->delete($userLock);
            return "活动不存在";
        }

        //初始化库存
        $cnt = $event['remainCnt'];
        $redis->set($eventLock, 1);//缓存活动
        $redis->setnx($eventCntKey, $cnt);//初始化库存
    }

    $cnt = $redis->decr($eventCntKey);//扣库存
    if ($cnt < 0) {
        $redis->incr($eventCntKey);
        $redis->delete($userLock);
        return "库存不足";
    }

    $time = time();

    $db->query("BEGIN");
    $db->query("UPDATE `event` SET `remainCnt` = `remainCnt` - 1 WHERE `id` = {$eventId} AND `remainCnt` > 0");
    $db->query("INSERT INTO `log` (`eventId`, `userId`, `createTime`) VALUES ({$eventId}, {$userId}, {$time})");
    $db->query("COMMIT");
    $redis->delete($userLock);

    return "Success";
}