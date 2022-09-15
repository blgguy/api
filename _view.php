<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    include_once 'eng/V.Class.php';

    $_view = new VIEW();
    $id     =   $_GET['id'];

    $_viewAll   =   $_view->_view($id);
    $_viewCount =   $_viewAll->rowCount();

    echo json_encode($_viewCount);
    if($_viewCount > 0){
        $vieW               = array();
        $vieW["body"]       = array();
        $vieW["itemCount"]  = $_viewCount;
        while ($row = $_viewAll->fetch()){
            extract($row);
            $e = array(
                "uniqId"    => $row['_uniqId'],
                "name"      => $row['_name'],
                "email"     => $row['_email'],
                "password"  => $row['_password'],
                "date"      => $row['_date']
            );
            array_push($vieW["body"], $e);
        }
        echo json_encode($vieW);
    }
    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
?>