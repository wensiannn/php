<?php

if($_GET['Bed']) {

if($_GET['Bed'] != '' and  $_GET['Attend'] != ''){
 $nurse=new nurse($_GET['Bed'],$_GET['Attend']);
}
$Bed = $_POST['Bed'];
$Attend = $_POST['Attend'];

  // include db connect class
    require_once __DIR__ . '/db_connect.php';
    
     // connecting to db
    $db = new DB_CONNECT();
    $connect = $db->connectDB();
     

             //Set Singapore TimeZone fixed at +08:00
  $sqlCommand1="SET time_zone ='+08:00'";
  $statement = $connect->prepare($sqlCommand1);
  $statement->execute();
   
 
$query = "INSERT INTO `nurse`(`Bed`, `Attend`,`Date`) VALUES  ('".$Bed."','".$Attend ."', CURRENT_TIMESTAMP   )";
$statement = $connect->prepare($query);
$statement->execute();

echo ($query);
 
 
 ///List out to check
 
echo("<table border=1>"); 
 
 $query = "SELECT * FROM `nurse`   ";

 
$statement = $connect->prepare($query);
$count =0;
$statement->execute();
$result = $statement->fetchAll();



foreach($result as $row)
{
   
  
   echo ("<tr> <td>".  $row["Bed"]. "</td> <td>". $row["Attend"]. "</td> <td>".$row["Date"]. "</td></tr>");
                      
    
 
    


}
echo("</table>");
}
else
{
?>

 
<form action= 'add3.php' method ='post'>
  Bed:<br>
  <input type="text" name="Bed"><br>
  Attend:<br>
  <input type="text" name="Attend"><br><br>
  <input type="submit" value="Insert">

</form>

<?php
}


?>