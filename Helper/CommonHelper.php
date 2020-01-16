<?php
namespace Model\Helper;


class CommonHelper
{
    /**
     * URL重定向
     * @param string $url 重定向的URL地址
     * @param integer $time 重定向的等待时间（秒）
     * @param string $msg 重定向前的提示信息
     * @return void
     */
    public static function redirect($url, $time=0, $msg='')
    {
        //多行URL地址支持
        $url        = str_replace(array("\n", "\r"), '', $url);
        if (empty($msg))
            $msg    = "系统将在{$time}秒之后自动跳转到{$url}！";
        if (!headers_sent()) {
            // redirect
            if (0 === $time) {
                header('Location: ' . $url);
            } else {
                header("refresh:{$time};url={$url}");
                echo($msg);
            }
            exit();
        } else {
            $str    = "<meta http-equiv='Refresh' content='{$time};URL={$url}'>";
            if ($time != 0)
                $str .= $msg;
            exit($str);
        }
    }

    /**
     * 将时分秒转换成秒
     *
     * @param string $time   //只能为日期或小时格式  例如：2017-3-15 4:10:11  或  4:10
     * @param string $param  //（H,I,S）3个组合
     * @return float|int
     */
    public static function getSeconds($time, $param = 'H,I,S')
    {
        $timeArr = date_parse($time);
        $time = 0;

        if (strpos($param, 'H') !== false) {
            $time += $timeArr['hour'] * 3600;
        }
        if (strpos($param, 'I') !== false) {
            $time += $timeArr['minute'] * 60;
        }
        if (strpos($param, 'S') !== false) {
            $time += $timeArr['second'];
        }

        return $time;
    }

    /**
     * 检查几位小数
     * @param $number
     * @return int
     */
    public static function checkDecimalPointCount($number)
    {
        $numberArr = explode('.', $number);
        return isset($numberArr[1]) ? strlen($numberArr[1]) : 0;
    }

    /**
     * 返回两时间戳相差的天数
     * @param $startTime
     * @param $endTime
     * @return string
     * @author xiao
     */
    public static function getDiffDays($startTime, $endTime)
    {
        $datetime1 = date_create(date('Y-m-d', $startTime));
        $datetime2 = date_create(date('Y-m-d', $endTime));
        $interval = date_diff($datetime1, $datetime2);
        return $interval->format('%a') + 1;
    }

    /**
     * 获取数组分页后的数据
     * @param $data
     * @param $page
     * @param $num
     * @param bool|false $isSort
     * @return array
     */
    public static function getPagingData($data, $page, $num, $isSort = false)
    {
        if ($isSort) {
            $data = array_reverse($data);  //反转数组
        }

        return array_slice($data, ($page - 1) * $num, $num, true);
    }


    /**
     * 通过年龄获取日期
     * @param $age
     * @return string
     */
    public static function getAgeData($age)
    {
        $now = time();
        $nowYear = date("Y", $now);
        $nowMonthDay = date("m-d", $now);
        $year = $nowYear - $age;
        $ageData = $year."-".$nowMonthDay;

        return $ageData;
    }

    /**
     * 文件上传
     * @param $file
     * @param $uploadPath
     * @param array $allowType
     * @param int $maxSize
     * @param string $FileName      //是否重命名
     * @return mixed
     */
    public static function upload($file, $uploadPath, $allowType = array(), $maxSize = 10, $FileName = '')
    {
        if (!isset($file['name']) || !isset($file['error']) || !isset($file['tmp_name']) || !isset($file['size']) || !isset($file['type'])) {
            return false;
        }

        if ( $file['error'] != 0) {
            return false;
        }

        if ($file['size'] > 1024 * 1024 * $maxSize) {
            return false;
        }

        //判断文件类型
        if (count($allowType) > 0 && !in_array($file['type'], $allowType)) {
            return false;
        }

        //判断保存路径是否有效
        if (!is_dir($uploadPath)) {
            return false;
        }

        if ($FileName) {
            $fileName = $FileName;
        } else {
            $fileName = $file['name'];
        }

        $targetImg = $uploadPath . '/' . $fileName;//保存上传图片的完整路径
        if (!move_uploaded_file($file['tmp_name'], $targetImg)) {
            return false;
        }

        return $fileName;
    }

    /**
     * 计算两点地理坐标之间的距离
     * @param  //Decimal $longitude1 起点经度
     * @param  //Decimal $latitude1  起点纬度
     * @param  //Decimal $longitude2 终点经度
     * @param  //Decimal $latitude2  终点纬度
     * @param  Int     $unit       单位 1:米 2:公里
     * @param  Int     $decimal    精度 保留小数位数
     * @return float
     */
    public static function getDistance($longitude1, $latitude1, $longitude2, $latitude2, $unit = 2, $decimal = 2)
    {

        $EARTH_RADIUS = 6370.996; // 地球半径系数
        $PI = 3.1415926;

        $radLat1 = $latitude1 * $PI / 180.0;
        $radLat2 = $latitude2 * $PI / 180.0;

        $radLng1 = $longitude1 * $PI / 180.0;
        $radLng2 = $longitude2 * $PI /180.0;

        $a = $radLat1 - $radLat2;
        $b = $radLng1 - $radLng2;

        $distance = 2 * asin(sqrt(pow(sin($a / 2),2) + cos($radLat1) * cos($radLat2) * pow(sin($b / 2),2)));
        $distance = $distance * $EARTH_RADIUS * 1000;

        if($unit == 2){
            $distance = $distance / 1000;
        }

        return round($distance, $decimal);
    }

    /**
     * 判断一个坐标是否在圆内
     * 思路：判断此点的经纬度到圆心的距离  然后和半径做比较
     * 如果此点刚好在圆上 则返回true
     * @param $point ['lng'=>'','lat'=>''] array指定点的坐标
     * @param $circle array ['center'=>['lng'=>'','lat'=>''],'radius'=>'']  中心点和半径
     * @return boolean
     */
    public static function isPointInCircle($point, $circle)
    {
        $distance = self::getDistance($point['lng'] ,$point['lat'], $circle['center']['lng'], $circle['center']['lat'] , 1);
        if($distance <= $circle['radius']){
            return $distance;
        }else{
            return false;
        }
    }

    /**
     * 判断一个坐标是否在一个多边形内（由多个坐标围成的）
     * 基本思想是利用射线法，计算射线与多边形各边的交点，如果是偶数，则点在多边形外，否则
     * 在多边形内。还会考虑一些特殊情况，如点在多边形顶点上，点在多边形边上等特殊情况。
     * @param array $point 指定点坐标
     * @param array $pts 多边形坐标 顺时针方向
     * @return boolean
     */
    public static function isPointInPolygon($point, $pts)
    {
        $N = count($pts);
        $boundOrVertex = true; //如果点位于多边形的顶点或边上，也算做点在多边形内，直接返回true
        $intersectCount = 0;//cross points count of x
        $precision = 2e-10; //浮点类型计算时候与0比较时候的容差
        $p = $point; //测试点

        $p1 = $pts[0];//left vertex
        for ($i = 1; $i <= $N; ++$i) {//check all rays

            if ($p['lng'] == $p1['lng'] && $p['lat'] == $p1['lat']) {
                return $boundOrVertex;//p is an vertex
            }

            $p2 = $pts[$i % $N];//right vertex
            if ($p['lat'] < min($p1['lat'], $p2['lat']) || $p['lat'] > max($p1['lat'], $p2['lat'])) {//ray is outside of our interests
                $p1 = $p2;
                continue;//next ray left point
            }

            if ($p['lat'] > min($p1['lat'], $p2['lat']) && $p['lat'] < max($p1['lat'], $p2['lat'])) {//ray is crossing over by the algorithm (common part of)
                if($p['lng'] <= max($p1['lng'], $p2['lng'])){//x is before of ray
                    if ($p1['lat'] == $p2['lat'] && $p['lng'] >= min($p1['lng'], $p2['lng'])) {//overlies on a horizontal ray
                        return $boundOrVertex;
                    }

                    if ($p1['lng'] == $p2['lng']) {//ray is vertical
                        if ($p1['lng'] == $p['lng']) {//overlies on a vertical ray
                            return $boundOrVertex;
                        } else {//before ray
                            ++$intersectCount;
                        }
                    } else {//cross point on the left side
                        $xinters = ($p['lat'] - $p1['lat']) * ($p2['lng'] - $p1['lng']) / ($p2['lat'] - $p1['lat']) + $p1['lng'];//cross point of lng
                        if (abs($p['lng'] - $xinters) < $precision) {//overlies on a ray
                            return $boundOrVertex;
                        }

                        if ($p['lng'] < $xinters) {//before ray
                            ++$intersectCount;
                        }
                    }
                }
            } else {//special case when ray is crossing through the vertex
                if ($p['lat'] == $p2['lat'] && $p['lng'] <= $p2['lng']) {//p crossing over p2
                    $p3 = $pts[($i+1) % $N]; //next vertex
                    if ($p['lat'] >= min($p1['lat'], $p3['lat']) && $p['lat'] <= max($p1['lat'], $p3['lat'])) { //p.lat lies between p1.lat & p3.lat
                        ++$intersectCount;
                    } else {
                        $intersectCount += 2;
                    }
                }
            }
            $p1 = $p2;//next ray left point
        }

        if ($intersectCount % 2 == 0) {//偶数在多边形外
            return false;
        } else { //奇数在多边形内
            return true;
        }
    }


    /**
     * GET 请求
     * @param string $url
     * @return bool|mixed
     */
    public static function http_get($url)
    {
        $oCurl = curl_init();
        if (stripos($url, "https://") !== FALSE) {
            curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($oCurl, CURLOPT_SSLVERSION, 1); //CURL_SSLVERSION_TLSv1
        }
        curl_setopt($oCurl, CURLOPT_URL, $url);
        curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
        $sContent = curl_exec($oCurl);
        $aStatus = curl_getinfo($oCurl);
        curl_close($oCurl);
        if (intval($aStatus["http_code"]) == 200) {
            return $sContent;
        } else {
            return false;
        }
    }

    /**
     * 唯一订单号处理
     *
     * @param $oid
     * @param $userId
     * @return string
     */
    public static function getPayOid($oid, $userId)
    {
        // 日期_毫秒级_随机_oid
        $partOne = date('YmdHis', time());
        $partTwo = str_pad($userId, 8, '0', STR_PAD_LEFT);
        $partThree = str_pad($oid, 10, '0', STR_PAD_LEFT);
        return $partOne . $partTwo . $partThree;
    }

    /**
     * 还原订单号
     * @param $payOid
     * @return string
     */
    public static function getReductionOid($payOid)
    {
        return intval(substr($payOid, 22, 10));
    }

    /**
     * 两个日期之间的所有日期
     *
     * @param $startTime
     * @param $endTime
     * @param bool $formatDates
     * @return array
     */
    public static function prDates($startTime, $endTime, $formatDates = false)
    {
        $dateStart = strtotime(date("Y-m-d", $startTime));
        $dateEnd = strtotime(date("Y-m-d", $endTime));
        $formatDates ? $returnDate[date('Y-m-d', $dateStart)] = 0 : $returnDate[] = date('Y-m-d', $dateStart);
        while ($dateStart <= $dateEnd) {
            $dateStart = strtotime('+1 day', $dateStart);
            $formatDates ? $returnDate[date('Y-m-d', $dateStart)] = 0 : $returnDate[] = date('Y-m-d', $dateStart);
        }
        return $returnDate;
    }

    /**
     * 生成随机字符串
     * @param int $length   生成随机字符串的长度
     * @param string $char  组成随机字符串的字符串
     * @return bool|string  生成的随机字符串
     */
    public static function strRand($length = 32, $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
        if(!is_int($length) || $length < 0) {
            return false;
        }

        $string = '';
        for($i = $length; $i > 0; $i--) {
            $string .= $char[mt_rand(0, strlen($char) - 1)];
        }

        return $string;
    }
}