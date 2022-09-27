<?php

namespace application\models;

use application\lib\Db;
use application\core\Model;

class Account extends Model
{
    //тут реализация функций аккаунтов
    public $login;
    public $password;
    public $email;
    public $name;

    public function __construct()
    {
    }

    public function toArray()
    {
        return [
            'login' => $this->login,
            'password' => $this->passwors,
            'email' => $this->email,
            'name' => $this->name
        ];
    }
}
