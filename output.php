<?php
/**
 * Created by PhpStorm.
 * User: chentao
 * Date: 2019/1/10
 * Time: 2:53 PM
 */

//var_dump(is_null(0));
//var_dump(is_null([]));
//var_dump(false == []);
//var_dump([] == null);
//die;
//utf-8中文占3个字符
//echo mb_substr($str = '欢迎来我中国，you are welocme!', 0, 7)."\n";
//echo substr($str = '欢迎来我中国，you are welocme!', 0, 7);

//演示PHP中输出语句
//创建一个数组变量
$test='Hello';
$b = 'world';
$array = array("1"=>"a","2"=>"b",array('c','d','e'));

//echo 可以输出多个变量，用逗号分隔，比用.连接更快
echo "使用echo()输出：".$test,$b."\n";

print $test.$array."\n";

//print_r($array);

//var_dump($array);

?>