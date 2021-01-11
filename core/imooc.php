<?php
namespace core;

class imooc{

    public static $classMap = [];
    public $assgin;
    static public function run(){
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlfile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $cltrClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if(is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl = new $cltrClass();
            $ctrl->$action();
        }else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

    /**
     * 自动加载类库
     * @author cjk
     * @date 2020-12-31 17:12
     */
     static public function load($class){
         if(isset($classMap[$class])){
            return true;
         }else{
            $class = str_replace('\\','/',$class);
            $file = IMOOC.'/'.$class.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
         }
    }

    public function assgin($name,$value=''){
         if(is_array($name)){
             foreach ($name as $k=>$v){
                 $this->assgin[$k] = $v;
             }
         }else{
             $this->assgin[$name] = $value;
         }
    }

    public function dispaly($file){
        $file = APP.'/views/'.$file;
        if(is_file($file)){
            extract($this->assgin);
            include $file;
        }
    }
}
