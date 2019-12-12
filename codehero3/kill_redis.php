<?php
/**
 * 已知有10万个cdkey号码。给出一个发放cdkey的方案
 * 要求：1.用户在登录后，领取，每人限领一张
 *      2.高并发的情况下，不允许一个cdkey发放给同一个人
 *
 *
 *
 * 高并发下存在误差待改进
 *
 *
 * 连接redis的命令  redis-cli -h 127.0.0.1 -p 6379
 *
 * 压力测试：ab -c 100 -n 20000 http://localhost:8888/interview/codehero3/kill_redis.php
 */

$eventId = isset($_GET['eventId']) ? intval($_GET['eventId']) : 1;
$userId = isset($_GET['userId']) ? intval($_GET['userId']) : rand(1, 100000000);

kill($userId);

function kill($userId)
{

    $cdkey = 'cd_keys';
    $userkey = "join_user";


    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $cnt = $redis->sCard($cdkey);
    if (!$cnt) {
        echo '已经发放完毕！余量'.$cnt;
        die;
    }

    if (!$redis->sAdd($userkey, $userId)) {
        echo "只能领取一次";die;
    }

    //仓库中随机取出一个cdkey
    if($cdkey = $redis->sPop($cdkey)) {
        $db = new mysqli();
//        $db->connect('127.0.0.1', 'root', 'root', 'codehero', 8889);
        $db->connect('127.0.0.1', 'root', '12345678', 'codehero', 3306);
        $db->set_charset('utf8');

        $time = time();
        $db->query("BEGIN");
        $db->query("UPDATE `cdkeys` SET `status` = 1 WHERE `id` = {$cdkey} ADN `status`=0");
        $db->query("INSERT INTO `log` (`cdkey`, `userid`, `createTime`) VALUES ({$cdkey}, {$userId}, {$time})");
        $db->query("COMMIT");

        echo "success";die;
    } else {
        echo "已经发放完毕！";die;
    }


}