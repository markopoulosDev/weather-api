<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/Database.php';
include_once '../class/Items.php';

//connect to db
$database = new Database();
$db = $database->getConnection();

//create new object
$items = new Items($db);

//call the read function of the class
$result = $items->read();

//if results are found push them to array
if($result->num_rows > 0){  

    $itemRecords["items"]=array(); 
	while ($item = $result->fetch_assoc()) { 	
        extract($item); 
        $itemDetails=array(
            "id" => $id,
            "date" => $date,
            "temperature" => $tavg,
			"tmin" => $tmin,
            "tmax" => $tmax,            
			"precipitation" => $prcp,
            "snow" => $snow,	
            "wdir" => $wdir,
            "wspeed" => $wdspd,
            "pressure" => $pres
        ); 
            array_push($itemRecords["items"], $itemDetails);

    }    
    http_response_code(200);
    //convert array to json object     
    echo json_encode($itemRecords["items"]);
}else{     
    //handle no records found
    http_response_code(404);     
    echo json_encode(
        array("message" => "No item found.")
    );
} 