<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/16
 * Time: 2:05 PM
 */

$a = 1;
$b = $a;
$c = &$a;
$d = $c;
$e = &$c;
$e = 2;
echo $a,"\n",$b,"\n",$c,"\n",$d,"\n",$e,"\n";