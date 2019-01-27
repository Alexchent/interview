<?php
include 'IpLocationTool.php';
include 'MateDataSource.php';
/**
 * Class MateEntity
 */


class MateTool{
    /**
     * @var 纯真对象
     */
    private $IpLocation;

    /**
     * @var array  存放用于校准纯真ip的数据
     */
    private $arr;


    public $classStartTime;
    public $startTime;
    public $endTime;
    /**
     * @var 算法运行时间 单位毫秒
     */
    public $time;

    /**
     *
     *
     * @param string $fileName   纯真数据库文件路径和名字
     */
    public function __construct($fileName=__DIR__.'/db/qqwry.dat',$type=null){
        $this->classStartTime = $this->microtime_float();

        $this->IpLocation = new IpLocationTool($fileName,$type);

        $MateDataSource  = new MateDataSource();

        $this->arr = $MateDataSource->arr;
    }


    /**
     * @param $ip               IP地址，数字格式
     * @param null $type    默认值为null，只有是 （int）1时，强制重写内存
     *
     * @return array|bool
     */
    public function mateIpToCountry($ip,$type=false){

        $this->startTime = $this->microtime_float();

        $IpLR = $this->IpLocation->getlocation($ip,$type);

        $IpLR['country'] = mb_convert_encoding($IpLR['country'],'utf8','gbk');

        $IpLR['area'] = mb_convert_encoding($IpLR['area'],'utf8','gbk');

        $key = $IpLR['country'].$IpLR['area'];

        $result = $this->mate($key);

        $this->endTime = microtime(true);

        $this->time =$this->endTime -  $this->startTime;

        return $result;
    }

    /**
     * @param $key      匹配值
     *
     * @return bool
     */
    private function mate($key){
//        $count=0;//计算分词次数

        $keyLen = mb_strlen($key,'utf-8');     //关键字的长度

        for($len = 1; $len <= $keyLen; $len +=1){   //$len单个中国字站字符长度3

            $firstStr = mb_substr($key, $keyLen-$len, $len,'utf-8');

//            echo $firstStr.'<br>';

            for($i = 1; $i <= mb_strlen($firstStr,'utf-8'); $i +=1){      //$i单个中国字站字符长度3
//                $count++;

                $secondStr = mb_substr($firstStr, 0, $i, 'utf-8');

                if(mb_strlen($secondStr,'utf-8')<=1)continue;              //单个字跳过

//                echo $secondStr."<br>";

                if(array_key_exists($secondStr,$this->arr)){    //如果匹配成功

//                    var_dump($count);

                    return $this->arr[$secondStr];              //返回value值

                }
            }

        }
//        var_dump($count);
        return null;        //如果没有匹配到，返回原字符串

    }

    /**
     * 获取到当前时间精确到微秒
     * @return float
     */
    private function microtime_float(){

        list($usec, $sec) = explode(" ",microtime());

        return ((float)$usec + (float)$sec);
    }

}

