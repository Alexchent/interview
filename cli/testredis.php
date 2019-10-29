<?php
/**
 * redis 订阅模型
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/4/23
 * Time: 9:47 AM
 */

while (true) {
    //ini_set('default_socket_timeout', -1);
    $chancel = 'email';
    $redis = new Redis();
    $redis->connect('127.0.0.1','6379');
    $redis->subscribe([$chancel],'callback');
    sleep(0.1);
}


function callback($instance, $channelName, $message)
{
    echo $channelName, "==>", $message,PHP_EOL;
}
