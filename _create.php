<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once 'eng/C.Class.php';

$C = new CREATE();
// //http://localhost/2024/mukoya/api/crud/_create.php
// $data = json_decode(file_get_contents("php://input", TRUE));
// var_dump($data);
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $date       = $_POST['date']; //date('Y-m-d H:i:s');
    
    $INSERT     = $C->team($name, $email, $password, $date);
    if($INSERT){
        echo 'Created successfully';
    } else{
        echo 'Could not be created.';
    }

?>