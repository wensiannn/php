<?php
  
/*/*
  * Following code will update single product details */
 
$Bed = $_POST['Bed'];
$Attend = $_POST['Attend'];


 

  // include db connect class
    require_once __DIR__ . '/db_connect.php';
 // connecting to db
    $db= new DB_CONNECT();
    $db->connectDB();

     // update the staff details  

     $sqlCommand="UPDATE nurse SET  Attend='$Attend' WHERE Bed ='$Bed'  ";
   
//echo   $sqlCommand;

    $result =mysqli_query($db->myconn, "$sqlCommand");            
   // check if row update or not
    if ($result) {
        // successfully updated into database
      echo "Data updated successfully ";
      
      ?>
      

<meta http-equiv="refresh" content="0; URL='main.html'"/> 
 
 <?php
 
       
    } else {
        // failed to insert row
      echo "Oops! An error occurred.";
 
 
    }
 
 
$db->close($db->myconn);

?>
 