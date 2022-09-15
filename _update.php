<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once 'eng/U.Class.php';

$C = new UPDATE();

$name       = $_GET['name'];
$email      = $_GET['email'];
$password   = $_GET['password'];
$date       = $_GET['date'];
$UniqId     = $_GET['uniqID'];

$INSERT     = $C->_update($name, $email, $password, $date, $UniqId);
if($INSERT){
    echo 'Updated successfully';
} else{
    echo 'Could not be Updated.';
}

?>