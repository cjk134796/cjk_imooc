<?php
namespace app\ctrl;
use core\lib\conf;
use core\lib\model;

class indexCtrl extends \core\imooc
{
    public function index()
    {
        $data = 'hello World';
        $this->assgin('data',$data);
        $this->dispaly('index.html');
    }
}
