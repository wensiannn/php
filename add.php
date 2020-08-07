<html>
<body>
<h2>Add Product</h2>
<?php
/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */


// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['Bed']) ) {
 
   // $Bed = $_POST['Bed'];
   $Bed = $_GET['Bed'];
  
 
  // include db connect class
    require_once __DIR__ . '/db_connect.php';
 // connecting to db
    $myConnection= new DB_CONNECT();
    $myConnection->connect();
 
 // mysql inserting a new row
    $sqlCommand="INSERT INTO nurse (Bed) VALUES('$Bed')";
    $result =mysqli_query($myConnection->myconn, "$sqlCommand");

    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
      echo "Product successfully created.";
 
       
    } else {
        // failed to insert row
      echo "Oops! An error occurred.";
 
 
    }
}
//else {
?>

<!-- Your HTML Code area --
<form action="add.php" method ="post">
  Name:<br>
  <input type="text" name="Bed" >
  <br>
  
<br>
  <input type="submit" value="Submit">
</form> 
-->

<?php 
    
//}

?>

<!-- Your HTML Code area -->


 
</body>
</html>