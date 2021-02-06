<?php

namespace app\model;

use core\lib\model;

class CjkNameModel extends model
{
    public $table = 'cjk_name';

    public function lists(){
        return $this->select($this->table,'*');
    }

    public function getOne($id){
        return $this->get($this->table,'*',[
            'id'=>$id
        ]);
    }

    public function addOne($data){
        return $this->insert($this->table,$data);
    }

    public function setOne($where,$data){
        return $this->update($this->table,$data,$where);
    }

    public function del($where){
        return $this->delete($this->table,$where);
    }
}
