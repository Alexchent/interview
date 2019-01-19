<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/10
 * Time: 12:55 PM
 */

error_reporting(E_ALL);
/**
 * 给定一个二维数组，数组每行从左到右都是递增的；没列也是递增的。
 * 请完成一个函数，输入如上二维数组和一个整数，函数功能为判断该整数是都存在于数组中。
 * 时间复杂度尽可能低。（请说明时间复杂度）
 */

$arr = array([1,2,8,9],[2,4,9,12], [4,7,10,13], [6,8,11,15]);
$findParam = 9;
//var_dump( deep_in_array($arr, $findParam) );
//var_dump( deep_in_array2($arr, $findParam) );
//var_dump( deep_in_array3($arr, $findParam) );
var_dump( find($arr, $findParam) );

/**
 * 冒泡——时间复杂付O(n^2)
 * @param $arr
 * @param $findParam
 * @return bool
 */
function find($arr, $findParam) {
    //将数据放在坐标右上角array[0][col]
    $row = 0; //行
    $col = count($arr[0]) - 1;//列
        while ($row <= count($arr) - 1 && $col >= 0) {
            if ($findParam > $arr[$row][$col])
            $row++;//遇到大的下移
            else if ($findParam < $arr[$row][$col])
            $col--;//遇到小的左移
            else
                return true;
        }
        return false;
}


/**
 * 循环方式——冒泡
 * @param array $arr 待查二维数组
 * @param int $findParam
 * @return bool
 * 时间复杂度O(n²)
 */
function deep_in_array($arr, $findParam)
{
    //下面是一个例子：
    //二维数组:
    //$arr = array([1,2,8,9],[2,4,9,12], [4,7,10,13], [6,8,11,15]);
    //数字：9
    foreach ($arr as $item) {
        foreach ($item as $value) {
            if ($value == $findParam) return true;
            if ($value > $findParam) continue;
        }
    }
    return false;
}


/**
 * 利用in_array
 * @param $arr
 * @param $findParam
 * @return bool
 * 时间复杂度O(n²)
 */
function deep_in_array2($arr, $findParam)
{
    foreach ($arr as $item) {
        //in_array严格模式性能更高，因为松模式会将字符型数字串转换为长整型
        //使用时注意数据类型
        if (in_array($findParam, $item, true)) return true;
    }
    return false;
}

/**
 * 递归实现,优势，可以进行更高阶数组的判断
 *
 * 时间复杂度？
 */
function deep_in_array3($arr, $findParam){
    if (is_array($arr)) {
        foreach ($arr as $value) {
            if (is_array($value) && deep_in_array3($value, $findParam)) return true;
            if ($value == $findParam) return true;
            if ($value > $findParam) continue;
        }
    }
    if ($arr == $findParam) return true;
    return false;
}



