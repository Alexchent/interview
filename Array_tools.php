<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/10
 * Time: 12:19 PM
 */

class Array_tools
{
    /**
     * 给定一个二维数组，数组每行从左到右都是递增的；没列也是递增的。
     * 请完成一个函数，输入如上二维数组和一个整数，函数功能为判断该整数是都存在于数组中。
     * 时间复杂度尽可能低。（请说明时间复杂度）
     *
     * @param $arr
     * @param $findParam
     * @return bool
     */
    public static function deep_in_array($arr, $findParam)
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
    }
}