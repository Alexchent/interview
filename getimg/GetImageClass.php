<?php

define("DIR_IMG","/Users/chentao/Documents/work/interview/getimg/img/");
define("ERR_LOG","./img/log.txt");
define("ERR_MKDIR","./img/mkdir.log");
class GetImageClass{
	/**创建多级目录
	 *
	 * @param $path 目录路径
	 * @return mixed
	 */
	public function makedir($path){
		//header("Content-type:text/html;charset=utf-8");
		//判断目录存在否，存在给出提示，不存在则创建目录
		if (is_dir($path)){
			return $path;
		}else{
			//第三个参数是“true”表示能创建多级目录，iconv防止中文目录乱码
			$res=mkdir(iconv("UTF-8", "GBK", $path),0777,true);
			if ($res){
				return $path;
			}else{
				file_put_contents(ERR_MKDIR, $path, FILE_APPEND | LOCK_EX);
			}
		}
	}


	/**保存图片
	 *
	 * @param string $url					图片地址
	 * @param sttring $dir					用于创建保存图片的文件夹名
	 * @param string $filename		图片名
	 * @return bool
	 */
	public function grabImage_base($url, $dir, $filename='') {

		if($url == '') {
			return false; //如果 $url 为空则返回 false;
		}else{
			$headers = get_headers($url,1);
		}

		if(preg_match('/200/',$headers[0])){
			$ext_name = strrchr($url, '.'); //获取图片的扩展名
//			if($ext_name != '.gif' && $ext_name != '.jpg' && $ext_name != '.bmp' && $ext_name != '.png') {
			if(!in_array($ext_name, ['.gif','.jpg','.bmp','.png'], true)) {
				return false; //格式不在允许的范围
			}

			$this->makedir($dir);//创建保存图片的文件夹
			if($filename == '') {
				$filename = $dir.time().$ext_name; //以时间戳另起名
			}
//echo $filename,"\n";die;
			//开始捕获
			ob_start();
			readfile($url);
			$img_data = ob_get_contents();
			ob_end_clean();
			$local_file = fopen($filename , 'a');
			fwrite($local_file, $img_data);
			fclose($local_file);
			return true;
		}else{
			echo $url.'<br>';
			//记录日志文件
			file_put_contents(ERR_LOG, $url.PHP_EOL, FILE_APPEND | LOCK_EX);
			return false;   //无效资源
		}
	}
}



	
	

