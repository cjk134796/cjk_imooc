<?php
namespace core\lib;
use core\lib\conf;

class model extends  \Medoo\Medoo
{
    public function __construct()
    {
        $option = conf::all('database');
        parent::__construct($option);
    }
}
