<?php
  
/*/*
  * Following code will update single product details* Following code will g
 * A product is identified by product id (pid)
 */
 
 
// check for post data
if (isset($_POST["Bed"])) {
    $Bed = $_POST['Bed'];
    $Attend = $_POST['Attend'];
 
/*
 * Following code will list all the products
 */
 
  

  // include db connect class
    require_once __DIR__ . '/db_connect.php';
 // connecting to db
    $db= new DB_CONNECT();
    $db->connectDB();

     // get a product from products table
    $sqlCommand="SELECT *FROM nurse WHERE Bed= $Bed";


 
    $result =mysqli_query($db->myconn, "$sqlCommand");            
    if($result->num_rows === 0)
    {
        echo "Bed: $Bed Not Found";
    }
    else 
     {
                 $result = mysqli_fetch_array($result);
  
    
?>

<h2> Edit bed call </h2>
 <form action ="update_staff_details.php" method ="post">

  <input type="hidden" name="Bed" value="<?php echo $Bed  ?>">
  <input type="hidden" name="Bed" value="<?php echo $result["Bed"]   ?>">
    
  Bed:<br>
  <input type="text" name="Bed" value= "<?php echo  $result["Bed"] ?>" disabled>
  <br>
  Attend:<br>
  <input type="text" name="Attend" value= "<?php echo  $result["Attend"] ?>" required>
  <br>
  
  <input type="submit" value="Submit">
  </form>

<?php
 
   }
 
  
}
 

 
$db->close($db->myconn);

?>
 