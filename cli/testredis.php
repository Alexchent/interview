<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/4/23
 * Time: 9:47 AM
 */

while (true) {
    //ini_set('default_socket_timeout', -1);
    $redis = new Redis();
    $redis->pconnect('127.0.0.1','6379');
    $redis->subscribe(['testpub'],'callback');
    sleep(0.1);
}


function callback($instance, $channelName, $message)
{
    echo $channelName, "==>", $message,PHP_EOL;
}
