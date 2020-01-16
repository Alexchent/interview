<?php

namespace Helper;



class Tools
{
    /**
     * 导出csv文件到本地
     * @param string $filename
     * @param string $data
     */
    public static function export_csv($filename, $data)
    {
        header('Content-Encoding: UTF-8');
        header('Content-type: text/csv; charset=UTF-8');
        header("Content-Disposition:attachment;filename=" . $filename);
        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
        header('Expires:0');
        header('Pragma:public');
        echo $data;
    }

    /**
     * 获取gz文件扩展名
     * @return string
     */
    public static function getJsExt()
    {
        return strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') === false ? 'js' : 'js.gz';
    }

    /**
     * 计算百分比
     * @param float $all 被除数
     * @param float $part 除数
     * @return string
     */
    public static function calculatedProportion($part, $all)
    {
        if ($all > 0) {
            return round( $part/$all * 100, 2) . '%';
        } else {
            return "0%";
        }
    }

    public static function getFileLine($file_name, $line_star, $line_end, $isMissHeader = 1)
    {
        $n = 0;
        $handle = fopen($file_name,"r");
        $header = [];
        $data =[];
        if ($handle) {
            //取csv文件的头部
            if ($isMissHeader) $header = fgetcsv($handle);

            while (!feof($handle)) {
                ++$n;
                if (false !== ($out = fgetcsv($handle)) && $n >= $line_star) {
                    $data[] = $out;
                }
                if ($n == $line_end) break;
            }
            fclose($handle);
        }
        return ['header'=>$header, 'body'=>$data];
    }

    /**
     * 获取汉字首字母
     * @param $s0
     * @return null|string
     */
    public static function getfirstchar($s0)
    {
        $fchar = ord($s0{0});
        if($fchar >= ord("A") and $fchar <= ord("z") )return strtoupper($s0{0});
        $s1 = $s0;
        $s2 = $s1;
        //$s1 = iconv("UTF-8","gb2312", $s0);
        //$s2 = iconv("gb2312","UTF-8", $s1);
        if($s2 == $s0){$s = $s1;}else{$s = $s0;}
        $asc = ord($s{0}) * 256 + ord($s{1}) - 65536;
        if($asc >= -20319 and $asc <= -20284) return "A";
        if($asc >= -20283 and $asc <= -19776) return "B";
        if($asc >= -19775 and $asc <= -19219) return "C";
        if($asc >= -19218 and $asc <= -18711) return "D";
        if($asc >= -18710 and $asc <= -18527) return "E";
        if($asc >= -18526 and $asc <= -18240) return "F";
        if($asc >= -18239 and $asc <= -17923) return "G";
        if($asc >= -17922 and $asc <= -17418) return "I";
        if($asc >= -17417 and $asc <= -16475) return "J";
        if($asc >= -16474 and $asc <= -16213) return "K";
        if($asc >= -16212 and $asc <= -15641) return "L";
        if($asc >= -15640 and $asc <= -15166) return "M";
        if($asc >= -15165 and $asc <= -14923) return "N";
        if($asc >= -14922 and $asc <= -14915) return "O";
        if($asc >= -14914 and $asc <= -14631) return "P";
        if($asc >= -14630 and $asc <= -14150) return "Q";
        if($asc >= -14149 and $asc <= -14091) return "R";
        if($asc >= -14090 and $asc <= -13319) return "S";
        if($asc >= -13318 and $asc <= -12839) return "T";
        if($asc >= -12838 and $asc <= -12557) return "W";
        if($asc >= -12556 and $asc <= -11848) return "X";
        if($asc >= -11847 and $asc <= -11056) return "Y";
        if($asc >= -11055 and $asc <= -10247) return "Z";
        return null;
    }

    /**
     * 获取中文字符拼音首字母
     * @param string $str
     * @return null|string
     */
    public static function getFirstCharter($str)
    {
        if (empty($str)) {
            return '';
        }
        $fChar = ord($str{0});
        if ($fChar >= ord('A') && $fChar <= ord('z')) {
            return strtoupper($str{0});
        }
        $s1 = iconv('UTF-8', 'gb2312', $str);
        $s2 = iconv('gb2312', 'UTF-8', $s1);
        $s = $s2 == $str ? $s1 : $str;
        $asc = ord($s{0}) * 256 + ord($s{1}) - 65536;
        if ($asc >= -20319 && $asc <= -20284) {
            return 'A';
        }
        if ($asc >= -20283 && $asc <= -19776) {
            return 'B';
        }
        if ($asc >= -19775 && $asc <= -19219) {
            return 'C';
        }
        if ($asc >= -19218 && $asc <= -18711) {
            return 'D';
        }
        if ($asc >= -18710 && $asc <= -18527) {
            return 'E';
        }
        if ($asc >= -18526 && $asc <= -18240) {
            return 'F';
        }
        if ($asc >= -18239 && $asc <= -17923) {
            return 'G';
        }
        if ($asc >= -17922 && $asc <= -17418) {
            return 'H';
        }
        if ($asc >= -17417 && $asc <= -16475) {
            return 'J';
        }
        if ($asc >= -16474 && $asc <= -16213) {
            return 'K';
        }
        if ($asc >= -16212 && $asc <= -15641) {
            return 'L';
        }
        if ($asc >= -15640 && $asc <= -15166) {
            return 'M';
        }
        if ($asc >= -15165 && $asc <= -14923) {
            return 'N';
        }
        if ($asc >= -14922 && $asc <= -14915) {
            return 'O';
        }
        if ($asc >= -14914 && $asc <= -14631) {
            return 'P';
        }
        if ($asc >= -14630 && $asc <= -14150) {
            return 'Q';
        }
        if ($asc >= -14149 && $asc <= -14091) {
            return 'R';
        }
        if ($asc >= -14090 && $asc <= -13319) {
            return 'S';
        }
        if ($asc >= -13318 && $asc <= -12839) {
            return 'T';
        }
        if ($asc >= -12838 && $asc <= -12557) {
            return 'W';
        }
        if ($asc >= -12556 && $asc <= -11848) {
            return 'X';
        }
        if ($asc >= -11847 && $asc <= -11056) {
            return 'Y';
        }
        if ($asc >= -11055 && $asc <= -10247) {
            return 'Z';
        }
        return null;
    }

    /**
     * 获取汉字首字母简码
     * @param $zh
     * @return string
     */
    public static function getBC($zh){
        $ret = "";
        $s1 = iconv("UTF-8","gb2312", $zh);
        $s2 = iconv("gb2312","UTF-8", $s1);
        if($s2 == $zh){$zh = $s1;}
        for($i = 0; $i < strlen($zh); $i++){
            $s1 = substr($zh,$i,1);
            $p = ord($s1);
            if($p > 160){
                $s2 = substr($zh,$i++,2);
                $ret .= self::getfirstchar($s2);
            }else{
                $ret .= $s1;
            }
        }
        return $ret;
    }

    /**
     * 生成简码
     *
     * @param string $name 名称，由数字英文字母或汉字组成
     *
     * @return string
     * @author tao.chen
     */
    public static function createBC($name)
    {
        $bc = '';
        $len = mb_strlen($name, "UTF8");
        for ($i = 0; $i < $len; $i++) {
            $charter = mb_substr($name, $i, 1, "UTF8");
            if (preg_match("/[a-zA-Z0-9]/", $charter)) {
                //匹配到是英文字母或数字，直接输入
                $firstCharter = strval(strtoupper($charter));
            } else {
                //只接受汉字，其他返回null
                $firstCharter = self::getFirstCharter($charter);
            }
            $bc .= $firstCharter;
        }
        if (empty($bc)) {
            $bc = '*';
        }
        $bc = substr($bc, 0, 10);
        return $bc;
    }

    /**
     * 选定数组的某个值做key重组数组
     * 适用于二维数组
     * @param $arr
     * @param $key
     * @return array
     */
    public static function array_set_key($arr, $key)
    {
        if (count($arr) == 0) return [];
        $formatData = [];
        foreach ($arr as $value) {
            $formatData[$value[$key]][] = $value;
        }
        return $formatData;
    }

    public static function array_set_primary_key($arr, $key)
    {
        if (count($arr) == 0) return [];
        $formatData = [];
        foreach ($arr as $value) {
            $formatData[$value[$key]] = $value;
        }
        return $formatData;
    }

    /**
     * 正则过滤 只获取中文字
     * @param $chars
     * @param string $encoding
     * @return string
     */
    public static function match_chinese($chars, $encoding = 'utf8')
    {
        $pattern = ($encoding == 'utf8') ? '/[\x{4e00}-\x{9fa5}]/u' : '/[\x80-\xFF]/';
        preg_match_all($pattern, $chars, $result);
        $temp = join('', $result[0]);
        return $temp;
    }





    public static function isNotJson($str)
    {
        return is_null(json_decode($str, true));
    }

    /**
     * 获取当前客户端的IP地址
     * @return array|false|string
     */
    public static function getIp()
    {
        if($ip = $_SERVER['REMOTE_ADDR']) return $ip;
        if($ip = getenv('HTTP_CLIENT_IP')) return $ip;
        if($ip = getenv('HTTP_X_FORWARDED_FOR')) return $ip;
    }

    public static function getServerIp()
    {
        return $_SERVER['SERVER_ADDR'];
    }

    /**
     * 求a相对于b的路径
     *
     * @param $a
     * @param $b
     * @return string
     */
    public static function getRelativePath($a, $b)
    {
        $path = '';
        $arr = explode('/', $a);
        $brr = explode('/', $b);

        $same = array_intersect_assoc($arr, $brr);//获取两个数组相同的部分
        $dir = array_diff_assoc($brr, $same);

        for($i = 1; $i <= count($dir)-1; $i++) {
            $path .='../';
        }

        $path .= str_replace(implode('/',$same).'/','', $a);

        return $path;
    }

    /**
     * 遍历指定目录下的所有目录和文件
     *
     * Date: 2019/12/22
     * Time: 3:50 PM
     */
    public static function get_dir_info($path) {
        $handle = opendir($path);//打开目录返回句柄
        while(($content = readdir($handle))!== false){

            $new_dir = $path . '/' . $content;
            if($content == '..' || $content == '.'){
                continue;
            }

            if(is_dir($new_dir)){
                echo "目录：".$new_dir . "\n";
                self::get_dir_info($new_dir);
            }else{
                echo "文件：".$path.'/'.$content ."\n";
            }
        }
    }

}
