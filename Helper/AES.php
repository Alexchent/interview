<?php
/**
 * AES加密、解密工具包
 * Created by PhpStorm.
 * User: tao.chen
 * Date: 2017/12/11
 * Time: 15:25
 */

namespace Helper;

class AES {

	/**
	 * 加密方法
	 * @param string $input
	 * @param string $key
	 * @return string
	 */
	public static function aes_encrypt($input, $key)
	{
		//AES, 128 模式加密数据 ECB
		$md5key = strtoupper(md5($key));
		$key = hex2bin($md5key);
		$encrypted = openssl_encrypt($input,'AES-128-ECB',$key);
		return $encrypted;
	}


	/**
	 * 解密方法
	 * @param string $encrypted
	 * @param string $key
	 * @return string
	 */
	public static function aes_decrypt($encrypted, $key)
	{
		//AES, 128 模式加密数据 ECB
		$md5key = strtoupper(md5($key));
		$key = hex2bin($md5key);
		$decrypted = openssl_decrypt($encrypted,'AES-128-ECB',$key);
		return $decrypted;
	}
}

