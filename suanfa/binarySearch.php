<?php
//二分查找，返回索引
function binarySearch($arr, $str){
        $low = 0;
        $high = count($arr) - 1;
        while($low<=$high){
            $mid = floor(($low + $high)/2);
            if($arr[$mid] == $str) return $mid;

            if($arr[$mid]>$str) $high = $mid-1;

            if($arr[$mid]<$str) $low = $mid +1;
        }
        return false;//查找失败

	}

$arr = array(1, 3, 5, 7, 9, 11);
$inx = binarySearch($arr, 11);
echo $inx."\n";



//递归方式实现
function find($need, $arr) {
    $count = count($arr);
    if ($count == 1) {
        if ($arr[0] == $need) return true;
        return false;
    }

    $tmp = intval($count/2) - 1;
    if ($arr[$tmp] == $need) return true;

    if ($arr[$tmp] > $need) {
        return find($need, array_slice($arr, 0, $tmp+1));
    } else {
        return find($need, array_slice($arr, $tmp + 1));
    }
}