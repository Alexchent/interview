<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/16
 * Time: 2:08 PM
 */

#array_filter
#利用自定义函数筛选符合规则的元素，符合的放进结果数组中
function rule($var){
    if($var%2 == 0) return true;
    return false;
}

$arr=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>6);
$newarr = array_filter($arr,'rule', ARRAY_FILTER_USE_BOTH);
//var_dump($newarr);



/*
 * array_walk
   函数对数组中的每个元素应用用户自定义函数。在函数中，数组的键名和键值是参数。
   注释：您可以通过把用户自定义函数中的第一个参数指定为引用：&$value，来改变数组元素的值（参见实例 2）。此时作用与array_map相同
*/
$arr = [1,2,3,4,5,6];
$a = 2;

array_walk($arr, function(&$v, $k, $a){
   $v = $v + $a;
}, $a);
//var_dump($arr);



#array_map 将自定义函数作用于数组的每一个元素
$brr = [1,2,3,'a'=>4,5,6];
$test1 = function ($v) use ($a) {
    echo $v.'——'.$a."\n";
    return $v + $a;
};

$newarr = array_map($test1, $brr);

var_dump($newarr);die;




