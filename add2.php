<?php

    require_once __DIR__ . '/db_connect.php';
    $db = new DB_CONNECT();
    $connect = $db->connectDB();
 
 if($_GET['Bed'] != '' and  $_GET['Attend'] != '' and $_GET['Name']!= ''){

$Bed=$_GET['Bed'];
$Attend=$_GET['Attend'];
$Name=$_GET['Name'];


   $sqlCommand1="SET time_zone ='+08:00'";
   $statement = $connect->prepare($sqlCommand1);
   $statement->execute();
		 
  
$query = "INSERT INTO `nurse`(`Bed`, `Attend`,`Name`,`Date`) VALUES  ('".$Bed."','".$Attend ."','".$Name."', CURRENT_TIMESTAMP   )";
$statement = $connect->prepare($query);
$statement->execute();
 
}



?>


