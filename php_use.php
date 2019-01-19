<?php
/**
 * 闭包
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/19
 * Time: 1:09 PM
 */

$brr = [1,2,3,4,5,6];
$a = 3;
$test1 = function ($v) use ($a) {
//    echo $v.'——'.$a."\n";
    return $v + $a;
};

$newarr = array_map($test1, $brr);

var_dump($newarr);die;