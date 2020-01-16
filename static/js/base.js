/**
 * Created by SD on 2016/7/7.
 */

var IMOOC = IMOOC || {};//有IMOOC对象则引用，否则创建对象
IMOOC.GLOBAL = {};
IMOOC.APPS = {};

IMOOC.APPS.QUERYMOBILE = {};
IMOOC.APPS.QUERYMOBILE.BAIDU = {};
IMOOC.APPS.QUERYMOBILE.show = function(id){
    $('#'+id).show();
};
IMOOC.APPS.QUERYMOBILE.hide = function(id){
    $('#'+id).hide();
};
IMOOC.APPS.QUERYMOBILE.dataCallback = function(data){
    console.log(data);
    if(data.code==200){
        IMOOC.APPS.QUERYMOBILE.show('phoneInfo');
        $('#phoneNumber').text(data.phone);
        $('#phoneProvince').text(data.province);
        $('#phoneCatName').text(data.catName);
        $('#phoneMsg').text(data.msg);
    } else {
        IMOOC.APPS.QUERYMOBILE.hide('phoneInfo');
        alert(data.msg);
    }
};
IMOOC.APPS.QUERYMOBILE.BAIDU.PhoneCallback = function(data){
    if(data.errNum==0){
        IMOOC.APPS.QUERYMOBILE.show('phoneInfo');
        $('#phoneNumber').text(data.retData.phone);
        $('#phoneProvince').text(data.retData.province);
        $('#phoneCity').text(data.retData.city);
        $('#phoneCatName').text(data.retData.supplier);
        $('#phoneMsg').text('百度提供');
    }else{
        IMOOC.APPS.QUERYMOBILE.hide('phoneInfo');
        alert(data.errMsg);
    }
};
IMOOC.APPS.QUERYMOBILE.BAIDU.IdCallback = function(data){
    if(data.errNum==0){
        var sex=null;
        IMOOC.APPS.QUERYMOBILE.show('phoneInfo');
        if(data.retData.sex=='M'){
            sex= "男";
        }else{
            sex = "女";
        }
        $('#sex').text(sex);
        $('#address').text(data.retData.address);
        $('#birthday').text(data.retData.birthday);
        $('#phoneMsg').text('百度提供');
    }else{
        IMOOC.APPS.QUERYMOBILE.hide('phoneInfo');
        alert(data.retMsg);
    }
};
IMOOC.APPS.QUERYMOBILE.BAIDU.IpCallback = function(data){
    if(data.errNum==0){
        IMOOC.APPS.QUERYMOBILE.show('phoneInfo');
        $('#ip').text(data.retData.ip);
        $('#country').text(data.retData.country);
        $('#Province').text(data.retData.province);
        $('#City').text(data.retData.city);
        $('#district').text(data.retData.district);
        $('#carrier').text(data.retData.carrier);
        $('#phoneMsg').text('百度提供');
    }else{
        IMOOC.APPS.QUERYMOBILE.hide('phoneInfo');
        alert(data.errMsg);
    }
};
IMOOC.GLOBAL.ajax = function(url,method,params,dataType,callback){
    $.ajax({
        url:url,
        method:method,
        data:params,
        dataType:dataType,
        success:callback,
        error:function(){
            alert('请求异常');
        }
    })
}

