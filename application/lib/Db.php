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

    public function addAccount(Account $account)
    {
        $collection = $this->model->getCollection();
        $collection[] = $account;
        $this->model->fetchDB($collection);
    }
    public function deleteAccount(Account $account)
    {
        $collection = $this->model->getCollection();
        $this->model->fetchDB($collection);
    }
}
