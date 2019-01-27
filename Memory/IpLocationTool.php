<?php

/**
 * IP 地理位置查询类
 * 每条IP记录都由国家和地区名组成，国家地区在这里并不是太确切，因为可能会查出来“清华大学计算机系”之类的，
 * 这里清华大学就成了国家名了，所以这个国家地区名和IP数据库制作的时候有关系。
 *
 * @author chent
 * @version 1.0
 */

class IpLocationTool {
    /**
     * 共享内存ID
     *
     * @var resource
     */

    private $fp;

    /**
     * 共享内存偏移地址
     *
     * @var resource
     */
    private $offset;

    /**
     * 第一条IP记录的偏移地址
     *
     * @var int
     */

    private $firstip;

    /**
     * 最后一条IP记录的偏移地址
     *
     * @var int
     */

    private $lastip;

    /**
     * IP记录的总条数（不包含版本信息记录）
     *
     * @var int
     */

    private $totalip;

    /**
     * 构造函数，创建共享内存，将QQWry.Dat文件读写入内存中，并初始化类中的信息
     *
     * @param string $fileName     文件路径和文件名
     *
     * @param null $type    只有是 （int）1时，强制重写内存
     */
    public function __construct($fileName,$type=null) {
        $this->fp = 0;

        if (($fileId = fopen($fileName, 'rb')) !== false) { //成功打开数据库文件

            $fileSize = filesize($fileName);//文件大小

            if ($type === 1) {//强制重写内存

                @$this->fp = shmop_open(864, 'c', 0666, $fileSize);
//                echo '强制重写内存';
                $content = fread($fileId, $fileSize);//读整个文件

                shmop_write($this->fp, $content, 0);//将文件中的数据写入内存
            }else{
                //创建共享内存,如果该共享内存已存在，则打开该共享内存
                if (@$this->fp = shmop_open(864, 'n', 0666, $fileSize)) {//新建内存
//                    echo "新建内存";
                    $content = fread($fileId, $fileSize);//读整个文件

                    shmop_write($this->fp, $content, 0);//将文件中的数据写入内存

                } else {
//                    echo "打开内存";
                    $this->fp = shmop_open(864, 'a', 0666, $fileSize);//打开内存

                }
            }

            fclose($fileId);//关闭文件

            $this->firstip = $this->getlong();

            $this->lastip = $this->getlong();

            $this->totalip = ($this->lastip - $this->firstip) / 7;

        }else{

            return null;    //文件没有打开直接返回空

        }

    }

    /**

     * 析构函数，用于在页面执行结束后自动关闭打开的文件。
     *
     */

    public function __destruct() {

        if ($this->fp) {

            shmop_close($this->fp);

        }

        $this->fp = 0;

    }

    /**

     * 返回读取的长整型数
     *
     * @access private
     * @return int
     */

    private function getlong() {

        //将读取的little-endian编码的4个字节转化为长整型数

        //$result = unpack('Vlong', fread($this->fp, 4));
        if(!isset($this->offset)||empty($this->offset)){
            $this->offset = 0;
        }
        $result = unpack('Vlong', shmop_read($this->fp, $this->offset, 4));
        $this->offset += 4;

        return $result['long'];

    }

    /**

     * 返回读取的3个字节的长整型数
     *
     * @access private
     * @return int
     */

    private function getlong3() {

        //将读取的little-endian编码的3个字节转化为长整型数

        //$result = unpack('Vlong', fread($this->fp, 3).chr(0));
        if(!isset($this->offset)||empty($this->offset)){
            $this->offset = 0;
        }
        $result = unpack('Vlong', shmop_read($this->fp, $this->offset, 3).chr(0));
        $this->offset += 3;

        return $result['long'];

    }

    /**
     * 返回压缩后可进行比较的IP地址
     *
     * @access private
     * @param string $ip
     * @return string
     */

    private function packip($ip) {

        // 将IP地址转化为长整型数，如果在PHP5中，IP地址错误，则返回False，

        // 这时intval将Flase转化为整数-1，之后压缩成big-endian编码的字符串

        return pack('N', intval(ip2long($ip)));

    }

    /**

     * 返回读取的字符串
     *
     * @access private
     * @param string $data
     * @return string
     */

    private function getstring($data = "") {

        //$char = fread($this->fp, 1);
        if(!isset($this->offset)||empty($this->offset)){
            $this->offset = 0;
        }
        $char = shmop_read($this->fp, $this->offset, 1);
        $this->offset += 1;

        while (ord($char) > 0) {        // 字符串按照C格式保存，以结束

            $data .= $char;             // 将读取的字符连接到给定字符串之后

            //$char = fread($this->fp, 1);
            $char = shmop_read($this->fp, $this->offset, 1);
            $this->offset += 1;

        }

        return $data;

    }

    /**
     * 返回地区信息
     *
     * @access private
     * @return string
     */

    private function getarea() {

        //$byte = fread($this->fp, 1);    // 标志字节
        if(!isset($this->offset)||empty($this->offset)){
            $this->offset = 0;
        }
        $byte = shmop_read($this->fp, $this->offset, 1);    // 标志字节
        $this->offset += 1;

        switch (ord($byte)) {

            case 0:                     // 没有区域信息

                $area = "";

                break;

            case 1:

            case 2:                     // 标志字节为1或2，表示区域信息被重定向

                //fseek($this->fp, $this->getlong3());
                $this->offset = $this->getlong3();

                $area = $this->getstring();

                break;

            default:                    // 否则，表示区域信息没有被重定向

                $area = $this->getstring($byte);

                break;

        }

        return $area;

    }

    /**
     * 根据所给 IP 地址或域名返回所在地区信息
     *
     *
     * @access public
     * @param string $ip
     * @param bool $type    值是false则ip是数字格式，值是true则ip是（xxx.xxx.xxx.xxx）格式，
     *                      默认值是false，即ip默认为数字格式
     * @return array
     */

    public function getlocation($ip, $type=false) {

        if (!$this->fp) return null;            // 如果内存数据没有被正确打开，则直接返回空
        if (empty($ip)) return null;

        $location['ip'] = $ip;

        if($type) {
            $ip = $this->packip($location['ip']);   // 将输入的IP地址转化为可比较的IP地址
        }
        // 不合法的IP地址会被转化为255.255.255.255
        // 对分搜索
        $l = 0;                         // 搜索的下边界

        $u = $this->totalip;            // 搜索的上边界

        $findip = $this->lastip;        // 如果没有找到就返回最后一条IP记录（QQWry.Dat的版本信息）

        while ($l <= $u) {              // 当上边界小于下边界时，查找失败

            $i = floor(($l + $u) / 2); // 计算近似中间记录

            //fseek($this->fp, $this->firstip + $i * 7);
            $this->offset = $this->firstip + $i * 7;

            //$beginip = strrev(fread($this->fp, 4));     // 获取中间记录的开始IP地址
            $beginip = strrev(shmop_read($this->fp, $this->offset, 4));     // 获取中间记录的开始IP地址
            $this->offset += 4;

            // strrev函数在这里的作用是将little-endian的压缩IP地址转化为big-endian的格式

            // 以便用于比较，后面相同。

            if ($ip < $beginip) {       // 用户的IP小于中间记录的开始IP地址时

                $u = $i - 1;            // 将搜索的上边界修改为中间记录减一

            }

            else {

                //fseek($this->fp, $this->getlong3());
                $this->offset = $this->getlong3();

                //$endip = strrev(fread($this->fp, 4));   // 获取中间记录的结束IP地址
                $endip = strrev(shmop_read($this->fp, $this->offset, 4));   // 获取中间记录的结束IP地址
                $this->offset += 4;

                if ($ip > $endip) {     // 用户的IP大于中间记录的结束IP地址时

                    $l = $i + 1;        // 将搜索的下边界修改为中间记录加一

                }

                else {                  // 用户的IP在中间记录的IP范围内时

                    $findip = $this->firstip + $i * 7;

                    break;              // 则表示找到结果，退出循环

                }

            }

        }

        //获取查找到的IP地理位置信息

        //fseek($this->fp, $findip);
        $this->offset = $findip;

        $location['beginip'] = long2ip($this->getlong());   // 用户IP所在范围的开始地址

        $offseton = $this->getlong3();    //原变量是$offseton

        //fseek($this->fp, $offseton);      //原变量是$offseton
        $this->offset = $offseton;

        $location['endip'] = long2ip($this->getlong());     // 用户IP所在范围的结束地址

        //$byte = fread($this->fp, 1);    // 标志字节
        $byte = shmop_read($this->fp, $this->offset, 1);    // 标志字节
        $this->offset += 1;

        switch (ord($byte)) {

            case 1:                     // 标志字节为1，表示国家和区域信息都被同时重定向

                $countryOffset = $this->getlong3();         // 重定向地址

                //fseek($this->fp, $countryOffset);
                $this->offset = $countryOffset;

                //$byte = fread($this->fp, 1);    // 标志字节
                $byte = shmop_read($this->fp, $this->offset, 1);    // 标志字节
                $this->offset += 1;

                switch (ord($byte)) {

                    case 2:             // 标志字节为2，表示国家信息又被重定向

                        //fseek($this->fp, $this->getlong3());
                        $this->offset = $this->getlong3();

                        $location['country'] = $this->getstring();

                        //fseek($this->fp, $countryOffset + 4);
                        $this->offset = $countryOffset + 4;

                        $location['area'] = $this->getarea();

                        break;

                    default:            // 否则，表示国家信息没有被重定向

                        $location['country'] = $this->getstring($byte);

                        $location['area'] = $this->getarea();

                        break;

                }

                break;

            case 2:                     // 标志字节为2，表示国家信息被重定向

                //fseek($this->fp, $this->getlong3());
                $this->offset = $this->getlong3();

                $location['country'] = $this->getstring();

                //fseek($this->fp, $offset + 8);
                $this->offset = $offseton + 8;

                $location['area'] = $this->getarea();

                break;

            default:                    // 否则，表示国家信息没有被重定向

                $location['country'] = $this->getstring($byte);

                $location['area'] = $this->getarea();

                break;

        }

        if ($location['country'] == " CZ88.NET") { // CZ88.NET表示没有有效信息

            $location['country'] = "未知";

        }

        if ($location['area'] == " CZ88.NET") {

            $location['area'] = "";

        }

        return $location;

    }
}

?> 