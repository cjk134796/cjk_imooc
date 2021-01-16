<?php
namespace core\lib;
use core\lib\conf;

class log
{
    static $class;
    /**
     * 日志类
     * 1.确定日志存储方式
     * 2.日志单位为一个小时
     * 3.在系统敏感位置添加日志
     */

    static public function init(){
        //确定储存方式
        $drive = conf::get('DRIVE','log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }

    static public function log($name,$file = 'log'){
        self::$class->log($name,$file);
    }
}