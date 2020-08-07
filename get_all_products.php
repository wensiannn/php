<!DOCTYPE html>  
<html>  
   <head>  
      <title>The Materialize CSS Example</title>  
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">        
      <link rel = "stylesheet"  
         href = "https://fonts.googleapis.com/icon?family = Material+Icons">  
      <link rel = "stylesheet"  
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">  
      <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js">  
      </script>             
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">  
      </script>               
   </head>

<html>
<body>
    <div class = "card-panel teal lighten-2"><h3><p class = "center-align">Bed Call list</p></h3></div>
      
    <li><a href="main.html">Go to main page</a> </li>
<table border=1>

 <?php
 /*
 * Following code will list all the products
 */

  // include db connect class
    require_once __DIR__ . '/db_connect.php';
    
     // connecting to db
    $db = new DB_CONNECT();
    $connect = $db->connectDB();
     
  
 
 ///List out to check
 
echo("<table border=1>"); 
 
$query = "select * from `nurse` Order by Bed";

echo ($query);
 

$statement = $connect->prepare($query);
//$count =0;
$statement->execute();
$result = $statement->fetchAll();


foreach($result as $row)
{
   
  
   echo ("<tr> <td>".  $row["Bed"]. "</td> <td>". $row["Date"]."</td><td>".$row["Attend"]."</td> </tr>");
                      
    
 
    


}
echo("</table>");
    
/*

  // include db connect class
    require_once __DIR__ . '/db_connect.php';
 // connecting to db
    $db= new DB_CONNECT();
    $db->connectDB();

// get all products from products table

    $sqlCommand="SELECT *FROM nurse Order by Bed";
    $result =mysqli_query($db->myconn, "$sqlCommand");
$fields_num = mysqli_num_fields($result);
// printing table headers
for($i=0; $i<$fields_num; $i++) { 
 $field = mysqli_fetch_field($result); 
 $htmlDisplay= $htmlDisplay."<td><b>{$field->name}</b></td>";
}

 // check for empty result
if (mysqli_num_rows($result) > 0) {
    // looping through all results
    
    while ($row = mysqli_fetch_row($result)) {
     


        $htmlDisplay= $htmlDisplay."<tr>"; 
    

 // $row is array... foreach( .. ) puts every element
 // of $row to $cell variable 

 foreach($row as $cell)  
  $htmlDisplay =$htmlDisplay."<td>$cell</td>"; 
 $htmlDisplay =$htmlDisplay."</tr>\n";
 
    }
 
$gmtTimezone = new DateTimeZone('Asia/Singapore');
$myDateTime = new DateTime('', $gmtTimezone);
$result = $myDateTime->format('Y-m-d H:i:s');

echo $result;
    

     
echo $htmlDisplay;
    

 
 
} else {
    // no products found

  echo "<h1> Not found </h1>";
  
}
$db->close($db->myconn);
*/



?>
</body>
</html>

</table>

