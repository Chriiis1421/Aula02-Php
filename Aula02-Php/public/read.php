<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
    header("Acess-Control-Allow-Origin: *");
    require __DIR__ . '/../vendor/autoload.php';

    use app\controller\StudentController;

    $obj = new StudentController();
    
    $data = $obj->read();
    
    print_r($data);