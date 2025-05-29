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
        echo $i ." : ".$arr[$i].PHP_EOL;
    }
    return $arr[$n];
};

//时间复杂度 O(n)
function fib2($n, $a, $b) {

    if ($n == 1) return $a;
    if ($n == 2) return $b;
    $c = 0;
    for ($i = 3; $i <= $n; $i++) {
        $c = $a + $b;
        $a = $b;
        $b = $c;
        echo $i." : ".$c.PHP_EOL;
    }
    return $c;
}

//递归实现 求数列的第n个数 时间复杂度O(2^n) 优点是算法简单
function fib3($n)
{
    if ($n < 2) return $n;
    return fib3($n-2) + fib3($n-1);
}

// 缓存中间结果，时间复杂度O(n)，空间复杂度O(n)
function fib3_optimized($n, &$memo = []) {
    if (isset($memo[$n])) return $memo[$n];
    if ($n < 2) return $n;

    $memo[$n] = fib3_optimized($n - 1, $memo) + fib3_optimized($n - 2, $memo);
    return $memo[$n];
}

// 1 1 2 3 ...
var_dump(fib(3,1,1));


var_dump(fib3_optimized(50));