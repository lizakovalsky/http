<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        if (!empty($_POST)) {
            $this->view->location('/index.php');
        }
        $this->view->render('login page');
    }

    public function registerAction()
    {
        if (!empty($_POST)) {
            $this->view->location('/index.php');
        }
        $this->view->render('register page');
    }
}
