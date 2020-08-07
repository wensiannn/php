<?php
session_start();


if($_SESSION["username"]=='admin') {
?>
<p>Welcome <?php echo $_SESSION["username"]; ?>. Click  <a href="logout.php" tite="Logout">here</a> to Logout.</p>
<?php
$login= 1;
}

else{
header("Location:dashboard.php");
//echo ("Please login first, Click here to <a href='login.php' tite='Login'>Log in.");
}

?>

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
      
      
      
      
      
      
      

             <style type="text/css">
             
.myTable { background-color:white;border-collapse:collapse; }
.myTable th {background-color:#DC143C;border-collapse:collapse; }
.myTable td, .myTable th { padding:10px;border:2px solid #000; }

</style>

<style>
body {
  background-image: url('image/backgrnd2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>



<table class="myTable">
<tr>


      
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
    <div class = "card-panel teal lighten-4"><h4><p class = "center-align">Nurse Call Station Dashboard</p></h4></div>
        <div class = "collection">
 
      <li><a href = "main.php" class = "collection-item"><i class="material-icons">keyboard_backspace</i>Go to main page</a>
   
      
 
      
     

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


if($login ==1){
$query = "select * from `nurse` Order by Bed";
 

$statement = $connect->prepare($query);
$count =0;
$statement->execute();
$result = $statement->fetchAll();

      


       
   

 echo("<tr>");
 
     
     
 





foreach($result as $Bed){


if($count == 3 )
{ 
$count=0;
 echo '</tr><tr>';
 }



        if($Bed['Attend']== 1)
        {
         ?>
            <td style="background-color:#DC143C;"><b>Bed <?php echo $Bed['Bed'];?> <br>Name: <?php echo $Bed['Name'];?><br>
            <a onClick="createPopupWin('http://nursecall.atspace.cc/search_bed.php?Bed=<?php echo $Bed['Bed'];?>' , 
            'Bed Data', 350, 200);"> <img id="bed" src="image/Red.gif" width = "30%" height ="20%" ></td></a>
       
        <?php
        $count++;
  
        }
        elseif($Bed['Attend']==0)
        {    
        ?>
            <td style="background-color:#00FA9A;"><b>Bed <?php echo $Bed['Bed'];?> <br>Name: <?php echo $Bed['Name'];?><br>
            <a onClick="createPopupWin('http://nursecall.atspace.cc/search_bed.php?Bed=<?php echo $Bed['Bed'];?>' , 
            'Bed Data', 350, 200);"> <img id="bed" src="image/bedGreen.jpg" width = "30%" height ="20%" ></td></a>
       
        <?php
        $count++;

        }
        
   
      
        
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
      
      
<!--<a href="#" onClick="MyWindow=window.open('http://nursecall.atspace.cc/search_bed.php?Bed=<?php echo $Bed['Bed'];?>''popup'); return false;">Click Here</a>-->
     
     <script> 
        function createPopupWin(pageURL, pageTitle, 
                    popupWinWidth, popupWinHeight) { 
            var left = (screen.width ) ; 
            var top = (screen.height ) ; 
            var myWindow = window.open(pageURL, pageTitle,  
                    'resizable=yes, width=' + popupWinWidth
                    + ', height=' + popupWinHeight + ', top=' 
                    + ((top/2)-100) + ', left=' + ((left/2)-175)); 
        } 
    </script> 
      
    <!--<button onclick = "createPopupWin('http://nursecall.atspace.cc/search_bed.php?Bed=<?php echo $Bed['Bed'];?>' , 
            'Bed Data', 350, 200);"> 
        Test 
    </button> -->

   <!--  <a href='http://nursecall.atspace.cc/search_bed.php?Bed=<?php echo $Bed['Bed'];?>' 
  target="popup" 
  onclick="window.open('http://nursecall.atspace.cc/search_bed.php?Bed=<?php echo $Bed['Bed'];?>','popup','width=350,height=200,scrollbars=no,resizable=no'); return false;">
    Open Link in Popup
</a>



<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
</head>
<body style="text-align:center">

<h2>Popup</h2>

<div class="popup" onclick="myFunction()">Click me to toggle the popup!
  <span class="popuptext" id="myPopup">Hello</span>
</div>

<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
-->

   <body onload = "JavaScript:AutoRefresh(2000);">
    
   </body>
   

   
</html>

</body>
</html>

</table>