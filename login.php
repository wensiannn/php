<html><head><body>

<?php


  // include db connect class
    require_once __DIR__ . '/db_connect.php';
      // connecting to db
    $db = new DB_CONNECT();
    $connect = $db->connectDB();
    
    if(isset($_POST['ID']) and isset($_POST['Pass'])) {


$User = $_POST['ID'];
$Pass = $_POST['Pass'];
$query="SELECT * FROM users ";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
if($Pass ==$row["password"])
{
  echo("Welcome, Click ok to continue");
  ?><br><a href = "main.html" class = "collection-item"> Ok </a><?php
 

  }
  else
  {
  echo("Wrong password");
  }
  
}




}
 else
 {
?>

 
<form action= 'login.php' method ='post'>
  Username:<br>
  <input type="text" name="ID"><br>
  Password:<br>
  <input type="password" name="Pass"><br><br>
  <input type="submit" value="Login">

</form>

<?php
}

?>
</body></head></html>
