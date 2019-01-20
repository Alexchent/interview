<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/16
 * Time: 2:08 PM
 */

#array_filter
function rule($var){
    if($var%2 == 0) return true;
    return false;
}

$arr=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>6);
$newarr = array_filter($arr,'rule', ARRAY_FILTER_USE_BOTH);
var_dump($newarr);



#array_walk 传引用,第三个参数传给回调函数
$arr = [1,2,3,4,5,6];
$a = 2;
function test(&$v, $key, $a) {
    $v = $v + $a;
}
array_walk($arr, 'test', $a);
//var_dump($arr);



#array_map 传值
$brr = [1,2,3,4,5,6];
$test1 = function ($v) use ($a) {
//    echo $v.'——'.$a."\n";
    return $v + $a;
};

$newarr = array_map($test1, $brr);

var_dump($newarr);die;




