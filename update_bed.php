<?php

    require_once __DIR__ . '/db_connect.php';
    
     // connecting to db
    $db = new DB_CONNECT();
    $connect = $db->connectDB();
     

 
echo("<table border=1>"); 
$Bed = $_GET['Bed'];
$Newattend = $_GET['Newattend'];

  $sqlCommand="UPDATE nurse SET Attend='$Newattend' WHERE Bed ='$Bed'  ";
$statement = $connect->prepare($sqlCommand);
$statement->execute();
 
 $query = "SELECT * FROM `nurse` WHERE Bed = '$Bed'  ";
$statement = $connect->prepare($query);
$statement->execute();
 echo( "<tr><td> Bed </td><td> Attend </td><td> Date </td></tr>");
$result = $statement->fetchAll();
foreach($result as $row)
{
   
  
   echo ("<tr> <td>".  $row["Bed"]. "</td> <td>". $row["Attend"]. "</td> <td>".$row["Date"]. "</td></tr>");
                      
    
 
    


}
echo("</table>");


?>