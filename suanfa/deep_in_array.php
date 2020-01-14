<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/10
 * Time: 12:55 PM
 */


/**
 * 给定一个二维数组，数组每行从左到右都是递增的；每列也是递增的。
 * 请完成一个函数，输入如上二维数组和一个整数，函数功能为判断该整数是都存在于数组中。
 * 时间复杂度尽可能低。（请说明时间复杂度）
 */

$arr = array(
    [1,2,8,9],
    [2,4,9,12],
    [4,7,10,13],
    [6,8,11,15]
);
$findParam = 6;
var_dump( find($arr, $findParam) );

/**
 * 顺序查找--时间复杂付O(n²)
 * @param $arr
 * @param $findParam
 * @return bool
 */
function find($arr, $findParam) {
    //从右上角array[0][col]开始遍历
    $row = 0; //行
    $col = count($arr[0]) - 1;//列

    $count = 0;
    while ($row <= count($arr) - 1 && $col >= 0) {
        $count++;
        if ($findParam > $arr[$row][$col]) {

            $row++;//遇到大的下移
        } else if ($findParam < $arr[$row][$col]) {

            $col--;//遇到小的左移
        } else {
            echo $count.PHP_EOL; //遍历次数
            return true;
        }
    }
    echo $count.PHP_EOL; //遍历次数
    return false;
}



