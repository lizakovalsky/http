<?php

namespace application\core;

use application\lib\DataBase;
use application\config\db;
use application\models\Account;

class Model
{
    //тут будут функции работы с передачей данных в бд
    //должна работа с дб прописаться
    public $db;
    function __construct()
    {
        $this->dataBase = new DataBase;
    }


    public function toArray($collection)
    {
        $arr = [];
        foreach ($collection as $item) {
            $arr[] = [
                'login' => $item->login,
                'password' => $item->password,
                'email' => $item->email,
                'name' => $item->name
            ];
        }
        return $arr;
    }

    public function getCollection()
    {

        $string = file_get_contents("db.json");
        print($string);
        $json_a = json_decode($string, true);

        $accounts = [];

        foreach ($json_a['accounts'] as $account) {
            $account[] = new Account($account['id'], $account['login'], $account['password'], $account['confirm_password'], $account['email'], $account['name']);
        }

        return [
            'accounts' => $accounts
        ];
    }

    
}
