<?php
namespace app\ctrl;
class indexCtrl{
    public function index()
    {
        p('it is index');
        $model = new \core\lib\model();
        $sql = "select * from cjk_name";
        $ret = $model->query($sql);
        p($ret->fetchAll());
    }

    public function a(){
        echo 666;
    }
}
