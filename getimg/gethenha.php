
<?php
require 'GetImageClass.php';
//获取很哈网henha.com的图片资源
set_time_limit(1800);//设置php超时时间

$getimgbase = new GetImageClass();
$url ='http://pic1.win4000.com/pic/c/33/16d2340465.jpg';
$newFile=$getimgbase->grabImage_base($url, DIR_IMG);

	

?>