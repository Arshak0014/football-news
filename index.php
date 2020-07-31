<?php

session_start();

spl_autoload_register(function ($className){

    $fileName = str_replace("\\", "/", $className).".php";
    require_once $fileName;
});

ini_set('display_errors',1);
error_reporting(E_ALL);


$router = new application\components\Router();

function debug($str){
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    exit();
}

$router->run();