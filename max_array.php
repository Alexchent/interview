<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/10
 * Time: 2:21 PM
 */

/**
 * 求一个矩阵中最大的二维矩阵（元素和最大）。如：
 * 1 2 0 3 4
 * 2 3 4 5 1
 * 1 1 5 3 0
 * 中最大的是：
 * 4 5
 * 5 3
 */


$arr = [
    [1,2,0,3,4],
    [2,3,4,5,1],
    [1,1,5,3,0]
];

$res = find_max_array($arr);
var_dump($res);

/**
 * @param $arr
 * @return array
 * 时间复杂度 O(n²)
 */
function find_max_array($arr)
{
    $maxSum = 0;    //最大二维矩阵的元素和
    $x = 0; $y = 0; //最大二维矩阵的左上坐标点
    $row = count($arr) -1;
    $col = count($arr[0]) -1;

    for($i=0; $i<$row; $i++) {
        for ($j=0;$j< $col; $j++) {
            $tmp = $arr[$i][$j] + $arr[$i][$j+1] + $arr[$i+1][$j] + $arr[$i+1][$j+1];
            if ($tmp > $maxSum) {
                $maxSum = $tmp;
                $x = $i;
                $y = $j;
            }
        }
    }
    return array(
        [$arr[$x][$y], $arr[$x][$y+1]],
        [$arr[$x+1][$y], $arr[$x+1][$y+1]],
    );
}