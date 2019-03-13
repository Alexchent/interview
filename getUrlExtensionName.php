<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/3/13
 * Time: 3:52 PM
 */

#写一个函数，尽可能高效的，从一个标准 url 里取出文件的扩展名
#例如: http://www.sina.com.cn/abc/de/fg.php?id=1 需要取出 php 或 .php

function getExtensionName($url)
{
    $arr = parse_url($url);
    var_dump($arr);
    /**
     * array(4) {
    'scheme' =>
    string(4) "http"
    'host' =>
    string(15) "www.sina.com.cn"
    'path' =>
    string(14) "/abc/de/fg.php"
    'query' =>
    string(4) "id=1"
    }

     */
    $pathArr = pathinfo($arr['path']);
    var_dump($pathArr);
    /**
     * array(4) {
    'dirname' =>
    string(7) "/abc/de"
    'basename' =>
    string(6) "fg.php"
    'extension' =>
    string(3) "php"
    'filename' =>
    string(2) "fg"
    }

     */
    echo '.',$pathArr['extension'],"\n";
}

function getExtensionName2($url)
{
    //取出扩展名及参数
    $temp = pathinfo($url,PATHINFO_EXTENSION);//php?id=1
    //找到扩展名
    $temp = explode("?",$temp);
     echo '.',$temp[0],"\n";
}

function getExtensionName3($url)
{
    //取出扩展名及参数
    $temp = pathinfo($url,PATHINFO_BASENAME); //fg.php?id=1
    var_dump($temp);
    //找到扩展名
    $temp = explode("。",$temp);
    echo $temp[0],"\n";
}

//$url = "http://www.sina.com.cn/abc/de/fg.php?id=1";
$url = "/Users/chentao/Documents/work/interview/codehero2/codehero-2.html";
getExtensionName($url);