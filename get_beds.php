




<!DOCTYPE html>  
<html>  
   <head>  
      <title>The Nurse Station</title>
      
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">        
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel = "stylesheet"  
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">  
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
         
      <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js">  
      </script>             
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">  
      </script>  
      
      <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
   </head>

<html>
<body>
 <body class="container">
    <div class = "card-panel teal lighten-2"><h3><p class = "center-align">Bed Calls list</p></h3></div>
        <div class = "collection">
 
      <li><a href = "main.html" class = "collection-item"><i class="material-icons">keyboard_backspace</i>Go to main page</a>
   
      
 
      
     

 <script>
  function green(){
  //ctx.fillStyle = "#00FF00"; 
  //ctx.fillRect(70, 20, 150, 100);
  
      context.fillStyle = "#00FF00";
      context.fill();
      context.lineWidth = 2;
      context.strokeStyle = '#003300';
      context.stroke();
  
  
 }
  function red(){
  //ctx.fillStyle = "#FF0000"; 
  //ctx.fillRect(70, 20, 150, 100);
  
  context.fillStyle = "#FF0000";
      context.fill();
      context.lineWidth = 2;
      context.strokeStyle = '#003300';
      context.stroke();
  }   
  </script>


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
 

$query = "select * from `nurse` Order by Bed";
 

$statement = $connect->prepare($query);
$count =0;
$statement->execute();
$result = $statement->fetchAll();

?>
   
 <table border = 1>
 <tr>
 



<?php

foreach($result as $Bed){


if($count == 3 )
{ 
$count=0;
 echo '</tr><tr>';
 }



        if($Bed['Attend']== 1)
        {
         ?>
            <td><b>Bed <?php echo $Bed['Bed'];?> <br>Name: <?php echo $Bed['Name'];?><br>
            <a href = "search_bed.php?Bed=<?php echo $Bed['Bed'];?>"><img src="image/Red.gif" width = "30%" height ="20%" ></td></a>
         
        <?php
        $count++;
  
        }
        elseif($Bed['Attend']==0)
        {    
        ?>
            <td><b>Bed <?php echo $Bed['Bed'];?> <br>Name: <?php echo $Bed['Name'];?><br>
            <a href = "search_bed.php?Bed=<?php echo $Bed['Bed'];?>"><img src="image/bedGreen.jpg" width = "30%" height ="20%" ></td></a>
         
        <?php
        $count++;

        }
        
   
      
        



}
?>

 
      
      <script type = "text/JavaScript">
         <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
      </script>
      

   
   <body onload = "JavaScript:AutoRefresh(1000);">
      <p>This page will refresh every 1 seconds.</p>
   </body>
   
</html>

</body>
</html>

</table>