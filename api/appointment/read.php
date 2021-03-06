<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
// include database and object files
include_once '../config/database.php';
include_once '../objects/appointment.php';
  
// instantiate database and appointment object
$database = new Database();
$db = $database->getConnection();
  
// initialize object
$appointment = new Product($db);
  
// query products
$stmt = $appointment->read();
$num = $stmt->rowCount();
  

// check if more than 0 record found
if($num>0){
  
    // appointment array
    $appointment_arr=array();
    $appointment_arr["records"]=array();
  
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
  
        $appointment_item=array(
            "appointmentId" => $appointmentId,
            "appointment_Name" => $appointment_Name,
            "notes" => $notes,
            "details" => $details,
            "child_Name" => $child_Name,
            "date" => $date
        );
  
        array_push($appointment_arr["records"], $appointment_item);
    }
  
    // set response code - 200 OK
    http_response_code(200);
  
    // show products data in json format
    echo json_encode($appointment_arr);
}
  
else{
  
    // set response code - 404 Not found
    http_response_code(404);
  
    // tell the user no products found
    echo json_encode(
        array("message" => "No appointment found.")
    );
}
