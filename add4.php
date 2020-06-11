<?php
 
if(isset($_POST['Bed'])) {

?>

<script>

 
  var d = new Date();

//yyyy-MM-dd HH:mm:ss
var dts= d.getFullYear() + "-" + 
    ("00" + (d.getMonth() + 1)).slice(-2) + "-" + 
    ("00" + d.getDate()).slice(-2) + " " + 
    ("00" + d.getHours()).slice(-2) + ":" + 
    ("00" + d.getMinutes()).slice(-2) + ":" + 
    ("00" + d.getSeconds()).slice(-2);
 
</script>


<?php


$Bed = $_POST['Bed'];
$Attend = $_POST['Attend'];
$dts =  "<script>document.writeln(dts);</script>";

 

  // include db connect class
    require_once __DIR__ . '/db_connect.php';
    
     // connecting to db
    $db = new DB_CONNECT();
    $connect = $db->connectDB();
     

             //Set Singapore TimeZone fixed at +08:00
  $sqlCommand1="SET time_zone ='+08:00'";
  $statement = $connect->prepare($sqlCommand1);
  $statement->execute();
   
 
$query = "INSERT INTO `nurse`(`Bed`, `Attend`,`Date`) VALUES  ('".$Bed."','".$Attend ."','".$dts."')";
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

 
<form action= 'add4.php' method ='post'>
  Bed:<br>
  <input type="text" name="Bed"><br>
  Attend:<br>
  <input type="password" name="Attend"><br><br>
  <input type="submit" value="Insert">

</form>

<?php
}

?>