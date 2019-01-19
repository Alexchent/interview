<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/19
 * Time: 4:10 PM
 */

$a = [1,2,3,4,5,8,9,11,12];
$x = 5;

function find($need, $arr) {
    var_dump($arr);
    $count = count($arr);
    if ($count == 1) {
        if ($arr[0] == $need) return true;
        return false;
    }

    $tmp = intval($count/2) - 1;
    if ($arr[$tmp] == $need) return true;

    if ($arr[$tmp] > $need) {
        return find($need, array_slice($arr, 0, $tmp+1));
    } else {
        return find($need, array_slice($arr, $tmp + 1));
    }
}

var_dump(find($x, $a));