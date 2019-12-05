<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/26
 * Time: 4:31 PM
 */


include 'Helper/Client.php';
include 'Helper/Tools.php';
include 'cli/pachong.php';


$redis = new Redis();
$redis->pconnect('127.0.0.1','6379');


//$res = $redis->sMembers('video_'.URL);
$res = $redis->sDiff('video_'.URL, 'video');//获取差集，key1为主体
//var_dump($res);die;
foreach ($res as $i){
    file_put_contents("video1.txt", $i."\n",FILE_APPEND);
}

//var_dump($res);die;