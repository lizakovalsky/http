<?php

namespace application\core;

class View
{
    public $path;
    public $layout = 'default';
    public $route;

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars = [])
    {
        extract($vars);
        $path = 'application/view/' . $this->path  . '.php';
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'application/view/layout' . $this->layout . '.php';
        } else {
            echo 'view not found' . $this->path;
        }
    }

    public function redirect($url)
    {
        header('location: ' . $url);
        exit;
    }

    public static function errorCode($code)
    {

        $path = 'application/view/errors' . $code . '.php';
        http_response_code($code);
        if (file_exists($path)) {
            require $path;
        }

        exit;
    }

    public function message($status, $message)
    {
        exit(json_encode(['status' => $status, 'message' => $message]));
    }

    public function location($url)
    {
        exit(json_encode(['url' => $url]));
    }
}
