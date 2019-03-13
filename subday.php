<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/3/13
 * Time: 3:32 PM
 */

$day1 = '2018/12/1';
$day2 = '2018/12/13';

echo round(abs(strtotime($day1) - strtotime($day2)) / 3600 /24);