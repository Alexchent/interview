<?php
/**
 * Created by PhpStorm.
 * User: hs
 * Date: 2015/7/22
 * Time: 16:18
 */

class cutTXT {

    /**
     * @var 原文件指针
     */
    private $fp;

    /**
     * @var 副本文件指针
     */
    private $copyfp;

    /**
     * @var 副本文件大小
     */
    private $fileSize;

    /**
     * @var 分割文件的保存路径
     */
    private $path;

    protected $message;



    public function __construct(){
        $this->path = "~/Downloads/cutTxt/";
        $this->fp = 0;
        $this->fileSize = 0;
        $this->copyfp = "";
        $this->message = array();
    }


    /**设置分割文件的保存路径
     *
     * @param $path
     * @return mixed
     */
    public function setPath($path){
        return $this->path = $path;
    }

    /**复制文件,成功返回true,失败返回false
     * @param $fileName
     * @return array|bool
     */
    function copyTxt($fileName){

        $this->copyfp = $this->path.basename($fileName);

        if(file_exists($fileName)) {    //如果文件存在

            if (copy($fileName, $this->copyfp)) { //复制文件成功

                return true;         //复制文件成功，返回复制文件的指针

            } else {
                $this->message[] = "文件副本创建失败";
            }
        }else{
            $this->message[] = "文件不存在，请选中TXT文件";
        }

        return $this->message;
    }


    /**
     * 将文件分割为$number份
     * @param string $fileName  文件
     * @param int $number    分割份数
     */
    public static function cutTXTbyNumber($fileName, int $number= 2) {

            if(file_exists($fileName)){
                $count = 1;

                $fp = fopen($fileName,"r");

                $fileSize = filesize($fileName);

                $size = ceil($fileSize/$number);   //进一取整,每个分割块的大小
                if($size ==1) {
                    echo "太小不能分割";die;
                }

                $pathinfo = pathinfo($fileName);
                while(!feof($fp)) {  // 如果文件指针没有到达文件尾
                    $newFile = $pathinfo['dirname']."/".$pathinfo['filename'].$count.$pathinfo['extension'];

                    $handle = fopen($newFile,"x+");   //创建文件
                    if($handle) {
                        fwrite($handle, fread($fp, $size));
                        echo $count++;
                    }else{
                        echo "文件创建失败\n";
                    }
                }
                fclose($fp);
                echo "success";
            }else{
                echo "路径或文件名错误";
            }

    }


}