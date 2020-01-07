<?php

namespace Framework;


class Loader
{

    /**
     * 注册自动加载类文件方法
     */
    public static function registerAutoLoad()
    {
        spl_autoload_register("\Framework\Loader::autoLoad");
    }

    /**
     * 自动加载的目录
     * @var array
     */
    private static $dirs = array();

    public static function addAutoloadDIR($dir)
    {
        self::$dirs[] = $dir;
    }

    /**
     * 自动加载类文件
     * @param string $class
     */
    public static function autoLoad($class)
    {
        $file = str_replace('\\', '/', $class) . ".php";
        foreach (self::$dirs as $dir) {
            $tmp = $dir . "/" . $file;
            if (file_exists($tmp)) {
                return require_once $tmp;
            }
        }

        echo $class . ' not exist!';

    }
}
