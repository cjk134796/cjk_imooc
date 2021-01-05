<?php
namespace core;

class imooc{

    public static $classMap = [];
    static public function run(){
        p('ok');
        //$route = new \core\route();
        $route = new \core\test();
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
}
