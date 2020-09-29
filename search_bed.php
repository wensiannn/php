<?php


  // include db connect class
    require_once __DIR__ . '/db_connect.php';
    
     // connecting to db
    $db = new DB_CONNECT();
    $connect = $db->connectDB();
     


$Bed = $_GET['Bed'];
$Attend=$_GET['Attend'];
 

 
 ///List out to check
 
echo("<table border=1>"); 
 
$query = "select * from `nurse` where `Bed` = $Bed";



 
$statement = $connect->prepare($query);
$count =0;
$statement->execute();
$result = $statement->fetchAll();
echo ("<tr><td>Bed</td><td>Date</td><td>Attend</td><td>Name</td><td>Request</td></tr>");
foreach($result as $row)
{
   
  
   echo ("<tr> <td>".  $row["Bed"]. "</td> <td>". $row["Date"]."</td> <td>". $row["Attend"]."</td><td>".$row["Name"]."</td><td>".$row["Type"]."</td></tr>");
                      
    
 
    


}
echo("</table>");


?>