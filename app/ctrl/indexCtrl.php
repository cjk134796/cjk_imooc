<?php
namespace app\ctrl;
class indexCtrl extends \core\imooc
{
    public function index()
    {
        $temp = \core\lib\conf::get('CTRL','route');
        $temp = \core\lib\conf::get('ACTION','route');
        p($temp);
        $data = 'Hello World';
        $title = '视图文件';
        $this->assgin(['da'=>$data,'ti'=>$title]);
        $this->dispaly('index.html');
    }

    public function a(){
        echo 666;
    }
}
