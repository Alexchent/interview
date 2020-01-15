<?php
/**
 * php7新特性——标量类型与返回值类型声明
 *
 *
 */

//默认严格模式，自动将转换数据类型
declare(strict_types=0);
//1 表示强制模式，错误的数据类型直接报fatal error

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