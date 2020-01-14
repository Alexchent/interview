<?php
/**
 * 合并两个有序数组为一个有序数组
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/19
 * Time: 2:33 PM
 */


$a = [1,3,5,7,9];
$b = [2,4,6];


/**
 * @param $a
 * @param $b
 * @return array
 * 时间复杂度 O(n^2)
 */
function sort_mix_array($a, $b)
{
    if(count($a) == 0) return $b;

    $result = [];
    $i=0;
    $b_cnt = count($b) - 1;
    //以a数组中的元素为基数，将b中比基数小的先存入结果数组，再将基数存入；
    //再取出a中的下一个数对b剩下的数组重复以上操作，直到所有元素存入结果数组
    foreach ($a as $k => $item) {

        while ($item > $b[$i]) {
            $result[] = $b[$i];
            $i++;

            // b数组中的元素已经全部进入新数组中,则将a数组中剩余的部分追加进结果数组
            if ($i>$b_cnt) {
                $result = array_merge($result, $a);
                // 注意不能用 array + array 合并数组。因为以数字为key，相同key的元素会被忽略
                //$result += $a;
                return $result;
            }
        }

        $result[] = $item;
        unset($a[$k]);
    }
    return $result;
}

print_r(sort_mix_array($a, $b));


//还有改造空间,在对b的遍历可以使用二分查找
//时间复杂度降到 O(nlogn)