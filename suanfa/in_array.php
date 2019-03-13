<?php
/**
 * 二分查找
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/19
 * Time: 4:10 PM
 */

$a = [1,2,3,4,5,8,9,11,12];
$x = 5;

function find($need, $arr) {
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

function find2($need, array $arr) {
    $start = 0;
    $end = count($arr) - 1;
    while ($start <= $end) {

        $mid = floor(($start + $end) / 2);

        if ($arr[$mid] == $need) return $mid;

        if ($arr[$mid] > $need) {
            $end = $mid - 1;
        }

        if($arr[$mid] < $need) {
            $start = $mid + 1;
        }
    }
    return false;
}

var_dump(find2($x, $a));