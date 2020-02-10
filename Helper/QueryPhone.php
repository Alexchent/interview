<?php
namespace Helper;
/**
 * Created by PhpStorm.
 * User: SD
 * Date: 2016/7/6
 * Time: 15:37
 */
use HttpRequest;

class QueryPhone
{
	/**
	 * 淘宝api
	 * https://tcc.taobao.com/cc/json/mobile_tel_segment.htm?tel=130********
	 */
	const PHONE_API = 'https://tcc.taobao.com/cc/json/mobile_tel_segment.htm';
	const BAIDU_API_PHONE = 'http://apis.baidu.com/apistore/mobilenumber/mobilenumber?phone';
	const BAIDU_PAI_apikey = '14153e647b7aa96a4be61d8f90468e6c';

	const QUERY_PHONE = 'PHONE:INFO:';

	private static function _formatData($data)
	{
		$ret = null;
		if (!empty($data)) {
			preg_match_all("/(\w+):'([^']+)/", $data, $res);
			$items = array_combine($res[1], $res[2]);
			foreach ($items as $itemKey => $itemVal) {
				$ret[$itemKey] = iconv('GB2312', 'UTF-8', $itemVal);
			}
		}
		return $ret;
	}

	public static function verifyPhone($phone)
	{
		if (preg_match("/^1[34578]{1}\d{9}/", $phone)) {
			return true;
		} else {
			return false;
		}
	}

	public static function query($phone)
	{
		$phoneData = null;
		if (self::verifyPhone($phone)) {
            //TODO 加缓存
            $response = HttpRequest::request(self::PHONE_API, ['tel' => $phone]);

            $phoneData = self::_formatData($response);

            $phoneData['msg'] = '数据由阿里巴巴提供';

		}
		return $phoneData;
	}

}