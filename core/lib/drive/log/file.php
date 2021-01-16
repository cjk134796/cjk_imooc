<?php
namespace core\lib\drive\log;

use core\lib\conf;

class file{
    public $path; //日志存储位置
    public function __construct()
    {
        $conf = conf::get('OPTION','log');
        $this->path = $conf['PATH'];

    }

    //文件系统
    public function log($messages,$file = 'log'){
        /**
         * 1.确定文件存储位置是否存在
         * 2.新建目录
         * 3.一个小时写入日志
         */
        if(!is_dir($this->path.date('YmdH'))){
            mkdir($this->path.date('YmdH'),'0777',true);
        }

        return file_put_contents($this->path.date('YmdH').'/'.$file.'.php',date('Y-m-d H:i:s').json_encode($messages).PHP_EOL,FILE_APPEND);
    }
}