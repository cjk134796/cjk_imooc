<?php
namespace app\ctrl;
use core\lib\conf;

class indexCtrl extends \core\imooc
{
    public function index()
    {
        $temp = new \core\lib\model();
        p( $temp);

        //$temp = \core\lib\conf::get('CTRL','route');
        //$temp = \core\lib\conf::get('ACTION','route');

        $data = 'Hello World';
        $title = '视图文件';
        $this->assgin(['da'=>$data,'ti'=>$title]);
        $this->dispaly('index.html');
    }
}
