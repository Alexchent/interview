<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/17
 * Time: 5:04 PM
 */
error_reporting(E_ALL);
declare(stric_types =0);
static $c=1;
$d=3;

$res1 = test(1.5,2);
echo $res1,"\n";
$res2 = test(1.5,2);
echo $res2,"\n";

/*
 * 输出结果
 * 7 此时$d=5.5
 * 8 因为返回值转为int，因此8.5变成了8
 */

/**
 * @param int $a 输入参数自动转为int
 * @param int $b
 * @return int 返回值自动转为int
 */
function test(int $a, int $b) : int {
    static $d = 4;
    $res = $a +$b;
    if (isset($c)) {
        $res += $c;
    }
    if (isset($d)) {
        $res +=$d;
        $d += 1.5;
    }
    return $res;
}