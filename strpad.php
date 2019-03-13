<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/3/13
 * Time: 2:28 PM
 */

$tmp = 10000000000;
$str = rand(1, 999999999);

echo substr($tmp + $str, 1, 10);