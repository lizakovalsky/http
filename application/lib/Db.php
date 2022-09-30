<?php

namespace application\lib;

use application\config\db;
use application\models\Account;
use application\core\Model;

class DataBase
{
    //Тут будут находиться функции crud
    public $collection;

    public function __construct()
    {
        $model = new Model;
    }

    public function fetchDB($collection)
    {
        $db = [
            'accounts' => $collection
        ];

        $handle = fopen('db.json', 'w+');
        fwrite($handle, json_encode($this->model->toArray($collection)));
        fclose($handle);
    }

    public function addAccount(Account $account)
    {
        $collection = $this->model->getCollection();
        $collection[] = $account;
        $this->fetchDB($collection);
    }
    public function deleteAccount(Account $account)
    {
        $collection = $this->model->getCollection();
        $this->fetchDB($collection);
    }
}
