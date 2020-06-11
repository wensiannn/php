<html>
<body>
    <li><a href="main.html">Go to main page</a> </li>

<?php
 
/*
 * Following code will update a product information
 * A product is identified by product id (pid)
 */
 

 

 
//check for empty entries
 if( ($_POST['Bed']=='')||($_POST['Attend']=='') )
 {
  // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
 
  }

  else
  {
    $Bed = $_POST['Bed'];
    $Attend = $_POST['Attend'];
    
 
// include db connect class
    require_once __DIR__ . '/db_connect.php';
 // connecting to db
    $db= new DB_CONNECT();
    $db->connectDB();

    // mysql update row with matched pid
    $sqlCommand="UPDATE nurse SET  Attend = '$Attend' WHERE bed = $bed";
    $result =mysqli_query($db->myconn, "$sqlCommand");


// check if row update or not
    if ($result) {
        // successfully updated into database
      echo "<h1> Data updated successfully </h1>";
 
       
    } else {
        // failed to insert row
      echo "<h1> Oops! An error occurred. </h1>";
 
 
    }

   } 

 
?>
</body>
</html>
