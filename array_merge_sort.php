<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/19
 * Time: 2:33 PM
 */


$a = [1,3,5,7,9];
$b = [2,4,6,8,10];
//$c = array_merge($a, $b);
//sort($c);
//var_dump($c);

//循环
function array_merge_sort($a, $b) {
    $an = count($a);
    $bn = count($b);
    $i = 0;
    $j =0 ;
    $result = [];
    while ($i <= $an) {
        while ($j<=$bn) {

            if (!isset($a[$i])) {
                if (isset($b[$j])) {
                    $result[] = $b[$j];
                    echo 'j2——',$j."\n";
                    $j++;
                    continue;
                }  else {
                    return $result;
                }

            }

            if ($a[$i] < $b[$j]) {
                $result[] = $a[$i];
                echo 'i——',$i."\n";
                $i++;
                break;
            } else {
                $result[] = $b[$j];
                echo 'j——',$j."\n";
                $j++;
            }
        }
    }
    return $result;
}


function array_merge_sort2($a, $b)
{
    $an = count($a);
    $bn = count($b);
    $i = 0;
    $j =0 ;
    $result = [];
    while (1) {
        if (!isset($a[$i])) {
                for ($j; $j < $bn; $j++) {
                    $result[] = $b[$j];
                }
                break;
        }

        if (!isset($b[$j])) {
            for ($i; $i < $an; $i++) {
                $result[] = $a[$i];
            }
            break;

        }

        if ($a[$i] < $b[$j]) {
                $result[] = $a[$i];
                echo 'i——',$i."\n";
                $i++;
        } else {
                $result[] = $b[$j];
                echo 'j——',$j."\n";
                $j++;
        }
    }
    return $result;
}


function sort_mix_array($a, $b)
{
    if(count($a) == 0) return $b;

    $result = [];
    $i=0;
    //以a数组中的元素为基数，将b中比基数小的先存入结果数组，再将基数存入；再取出a中的下一个数对b剩下的数组重复以上操作，直到所有元素存入结果数组
    foreach ($a as $k => $item) {

        while (isset($b[$i]) && $item > $b[$i]) {
            $result[] = $b[$i];
            $i++;
        }

        $result[] = $item;
    }
    return $result;
}


print_r(sort_mix_array($a, $b));