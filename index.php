<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */


define('IMOOC',realpath('./')); //当前框架所在的目录
define('CORE',IMOOC.'/core'); //框架核心文件所处目录
define('APP',IMOOC.'/app'); //项目文件（控制器，模型等）所在目录
define('MODULE','app');
define('DEBUG',true);

include "vendor/autoload.php";

if(DEBUG){
    $whoops = new \Whoops\Run;

    //自定义报错标题
    $errorTitle = '框架出错了';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);

    $whoops->pushHandler($option);
    $whoops->register();

    ini_set('display_error','On');
}else{
    ini_set('display_error','Off');
}

dump($_SERVER);die;

include CORE.'/common/function.php';

include CORE.'/imooc.php';

spl_autoload_register('\core\imooc::load'); //(魔术方法)new类不存在时会触发这方法

\core\imooc::run(); //启动框架

