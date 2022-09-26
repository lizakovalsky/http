<?php

ini_set('display_errors', 1); //catch the errors
error_reporting(E_ALL);

function debug($str)
{
    echo '<pre>';
    var_dump($str);
    echo '<pre>';
    exit;
}
