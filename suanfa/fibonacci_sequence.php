<?php
/**
 * 斐波那契数列
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/22
 * Time: 7:14 PM
 */

function fib($n, $a, $b) {
    $arr[1] = $a;
    $arr[2] = $b;
    if ($n <3) return $arr[$n];
    for ($i = 3; $i <= $n; $i++) {
        $arr[$i] = $arr[$i-1] + $arr[$i -2];
    }
    return $arr[$n];
};

function fib2($n, $a, $b) {

    if ($n == 1) return $a;
    if ($n == 2) return $b;
    $c = 0;
    for ($i = 3; $i <= $n; $i++) {
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
    return $c;
}

var_dump(fib2(6,1,2));
