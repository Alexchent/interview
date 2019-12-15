<?php
//二分查找，返回索引
function binarySearch( $arr,$str){
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