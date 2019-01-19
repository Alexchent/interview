<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/10
 * Time: 2:42 PM
 */

/**
 * 输入n个整数，输出其中最大的k个
 * 例如输入1，2，3，4，5，6，7，8这8个数字，则最大的3数字为8，7，6
 */

$arr = [1,2,3,4,5,6,7];

find_in_array($arr, 4);

function find_in_array($arr, $k) {
    rsort($arr);
    for ($i=0; $i< $k; $i++) {
        print($arr[$i]);
        echo PHP_EOL;
    }
}