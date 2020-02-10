<?php
namespace Helper;
/**http请求模块
 * Created by PhpStorm.
 * User: SD
 * Date: 2016/7/7
 * Time: 15:27
 */
class HttpRequest
{
    //利用file_get_contents获取数据
	public static function request($url, $params=[], $method='GET'){
		$res = null;
		if(preg_match("/^(http|https)\:\/\/(\w+\.\w+\.\w+)/", $url)){
			$method = strtoupper($method);
			if($method=='GET'){
				if ($params) {
					if (strripos('?', $url)) {
						$url = $url . '&' . http_build_query($params);
					} else {
						$url = $url . '?' . http_build_query($params);
					}
				}
				$res = file_get_contents($url);
			} elseif($method=='post') {
				exit("$method have none");
			}else{
				exit("$method have none");
			}
		}
		return $res;
	}
}