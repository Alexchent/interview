<?php/** * Created by PhpStorm. * User: chentao * Date: 2021/7/4 * Time: 10:55 PM *///冒泡排序的思想是：从第一个数开始，跟后面的数比较，如果比后面的数大则交换位置，那么更最后一个数比完，最大的数就排到了最后面//接着再从头开始，比较剩下的n-1个数//如此往复，直到最后一个数//时间复杂度 O(n^2)function bubble_sort($arr){    $len = count($arr);    if ($len < 2) return $arr;    for($i=1; $i<$len; $i++) {        for ($j=0; $j<$len-1;$j++) {            if ($arr[$j] > $arr[$j+1]) {                $tmp = $arr[$j];                $arr[$j] = $arr[$j+1];                $arr[$j+1] = $tmp;            }        }    }    return $arr;}$sort = bubble_sort([2,6,19,4,5,8,3]);var_dump($sort);