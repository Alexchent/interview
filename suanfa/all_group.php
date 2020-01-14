<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/10
 * Time: 4:01 PM
 */

/**
 * 输入一个字符串，打印出该字符串的所有排列。
 * 例如输入字符串abc，则输出由字符a,b,c所能排列出来的所有字符串
 * abc、acb、bac、bca、cab和cba
 *
 */

$str = 'abc';
test3(str_split($str), 0, strlen($str)-1);


function test3(&$arr,$start,$len){

    if ($start== $len){
        echo implode('', $arr),PHP_EOL;        //④
    }else {

        for ($i = $start; $i <= $len; $i++) {
            swap($arr[$start], $arr[$i]);   //①
            test3($arr, $start + 1, $len);  //②
            swap($arr[$start], $arr[$i]);   //③
        }
    }
}

function swap(&$a, &$b) {
    $tmp = $b;
    $b = $a;
    $a = $tmp;
}

//交换流程分析
/**
 * 字符串abc转数组[a,b,c] $len=2
 * 0        $start=0
 * 1.       start=0, $i=0, $arr[0]和$arr[0]交换    [a,b,c]
 * 2.       递归，$start=1
 * 2-1.     $start=1, $i=1, $arr[1]和$arr[1]交换   [a,b,c]
 * 2-2.     递归，$start=2
 * 2-2-4    输出 a,b,c, 退出该层递归
 * 2-3.     $start=1, $i=1,$arr[1]和$arr[1]交换    [a,b,c]
 * 2-1.     $start=1, $i=2,$arr[1]和$arr[2]交换    [a,c,b]
 * 2-2.     递归，$start=2
 * 2-2-4    输出a,c,b, 退出该层递归
 * 2-3      $start=1, $i=2,$arr[1]和$arr[2]交换    [a,b,c], 退出循环，退出递归
 *
 * 1        $start=0, $i=1,, $arr[0]和$arr[1]交换  [b,a,c]
 * 2.       递归，$start=1
 * 2-1.     $start=1, $i=1, $arr[1]和$arr[1]交换   [b,a,c]
 * 2-2.     递归，$start=2
 * 2-2-4    输出 b,a,c, 退出该层递归
 * 2-3.     $start=1, $i=1,$arr[1]和$arr[1]交换    [b,a,c]
 * 2-1.     $start=1, $i=2,$arr[1]和$arr[2]交换    [b,c,a]
 * 2-2.     递归，$start=2
 * 2-2-4    输出b,c,a, 退出该层递归
 * 2-3      $start=1, $i=2,$arr[1]和$arr[2]交换    [b,a,c], 退出循环，退出递归
 *
 * 1        $start=0, $i=2,, $arr[0]和$arr[2]交换  [c,b,a]
 * 2.       递归，$start=1
 * 2-1.     $start=1, $i=1, $arr[1]和$arr[1]交换   [c,b,a]
 * 2-2.     递归，$start=2
 * 2-2-4    输出 c,b,a, 退出该层递归
 * 2-3.     $start=1, $i=1,$arr[1]和$arr[1]交换    [c,b,a]
 * 2-1.     $start=1, $i=2,$arr[1]和$arr[2]交换    [c,a,b]
 * 2-2.     递归，$start=2
 * 2-2-4    输出c,a,b, 退出该层递归
 * 2-3      $start=1, $i=2,$arr[1]和$arr[2]交换    [c,b,a], 退出循环，退出递归
 * 程序结束
 */
