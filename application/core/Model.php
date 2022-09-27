<?php

namespace application\core;

use application\lib\Db;

abstract class Model
{
    //тут будут функции работы с передачей данных в бд
    public $db;
    function __construct()
    {
        $this->db = new Db;
    }
}
