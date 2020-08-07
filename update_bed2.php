<?php

//php
// Get raw data from request
$json = file_get_contents('php://input');

// Convert json to php object
$json_object = json_decode($json, true);

// Get pid value from json object
$Bed = $json_object['Bed']; //htmlspecialchars to be added
$Attend = $json_object['Attend']; //htmlspecialchars to be added

 
// array for JSON response
$response = array();

// include db connect class
    require_once __DIR__ . '/db_connect.php';
 // connecting to db
    $db = new DB_CONNECT();
    $connect = $db->connectDB();

    // mysql update row with matched pid
    $sqlCommand="UPDATE nurse SET Attend='$Attend' WHERE Bed = '$Bed'";
    $statement = $connect->prepare($sqlCommand);
    $statement->execute();
  
 


    // check if row inserted or not
   
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "Product successfully updated.";
 
        // echoing JSON response
        echo json_encode($response);
    
 
           
             
   

 
?>