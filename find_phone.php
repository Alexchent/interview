<?php
/**
 * 测试
 * Created by PhpStorm.
 * User: SD
 * Date: 2016/7/6
 * Time: 15:36
 */
include_once "autoload.php";
use app\QueryPhone;



$tel = $_POST['phone'] ?? 15251895564;

$response = QueryPhone::query($tel);

 if(is_array($response)&&isset($response['province'])){
	 $response['phone'] = $tel;
	 $response['code'] = 200;
 }else{
	 $response['code'] = 400;
	 $response['msg'] = "手机号码错误";
 }

echo json_encode($response);



