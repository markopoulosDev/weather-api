<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
include_once '../../config/Database.php';
include_once '../class/Items.php';
 
$database = new Database();
$db = $database->getConnection();
 
$items = new Items($db);
 
$data = $_POST;

    $items->date = $data['date'];
    $items->temperature = $data['temp'];
    $items->tmin = $data['tmin'];
    $items->tmax = $data['tmax'];   
    $items->precipitation = $data['precipitation'];
	$items->snow = $data['wdir'];
    $items->wdir = $data['date'];
	$items->wspeed = $data['wspeed'];
	$items->pressure = $data['pressure']; 


    if($items->create()){         
        http_response_code(201);         
        echo json_encode(array("message" => "Item was created."));
    } else{         
        http_response_code(503);        
        echo json_encode(array("message" => "Unable to create item."));
    }

?>