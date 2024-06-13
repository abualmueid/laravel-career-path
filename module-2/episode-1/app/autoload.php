<?php 

spl_autoload_register(function($className){
    $baseDir = "classes/";

    require_once $baseDir . $className . '.php';
});