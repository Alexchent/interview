<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/16
 * Time: 2:08 PM
 */

$arr = [1,2,3,4,5,6];
$a = 2;
function test(&$v, $key, $a) {
    $v = $v + $a;
}
array_walk($arr, 'test', $a);
//var_dump($arr);





$brr = [1,2,3,4,5,6];
$test1 = function ($v) use ($a) {
//    echo $v.'——'.$a."\n";
    return $v + $a;
};

$newarr = array_map($test1, $brr);

var_dump($newarr);die;




