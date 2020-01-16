<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/3/13
 * Time: 3:52 PM
 */

#写一个函数，尽可能高效的，从一个标准 url 里取出文件的扩展名
#例如: http://www.sina.com.cn/abc/de/fg.php?id=1 需要取出 php 或 .php

$url = "http://www.sina.com.cn/abc/de/fg.php?id=1";

//php内置函数是最高效的，能用内置函数尽量用内置函数
echo pathinfo(parse_url($url, PHP_URL_PATH), PATHINFO_EXTENSION);


echo PHP_EOL;
//分析parse_url和pathinfo
$arr = parse_url($url);
print_r($arr);
$pathArr = pathinfo($arr['path']);
print_r($pathArr);
echo $pathArr['extension'].PHP_EOL;

