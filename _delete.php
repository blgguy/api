<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    include_once 'eng/D.Class.php';
    
    $D          = new DELETE();

    $uniqID     = $_GET['id'];
    
    $DELETE_    = $D->_delete($uniqID);
    if($DELETE_){
        echo json_encode("Deleted successfully");
    } else{
        echo json_encode("Data could not be deleted");
    }
?>