
<?php
include 'GetImageClass.php';
//获取很哈网henha.com的图片资源
set_time_limit(1800);//设置php超时时间
define("URL_IMG","http://tu.simei8.com:7788/pic");//henha
function getImg_henha($urladd){
	$urla=intval(substr($urladd,0,3));
	$getimgbase = new GetImageClass();
	for($i=1;$i<100;$i++){
		$url=URL_IMG.$urla.'/'.$urladd.'-'.$i.'.jpg';
		$dir=DIR_IMG.$urladd.'/';
		$filename=$dir.$urladd.'-'.$i.'.jpg';
		$newFile=$getimgbase->grabImage_base($url,$dir,$filename);
		if($newFile===false){
			//echo "捕获".--$i."张图片"; 
			break;
		} 
	}
}
	
	
for($param=3402;$param<4000;$param++){
	$param = strval($param);
	switch(strlen($param)){
		case 1:
			$param = '0000'.$param;
			break;
		case 2:
			$param = '000'.$param;
			break;
		case 3:
			$param = '00'.$param;
			break;
		case 4:
			$param = '0'.$param;
			break;
		default:
			break;
	}
	getImg_henha($param);
}
?>