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
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 
   </head>
   <body>
   <div class = "card-panel teal lighten-2"><h3><p class = "center-align">Nurse Station</p></h3></div>
   <body class = "container">   
   <div align = "center">

     <img src= "image/bed.png" width = "30%" height ="30%"><br>
      <h3>Bed Calls</h3><hr/>
      <div class = "collection">
         <a href = "get_beds.php" class = "collection-item">List of Bed Calls</a>
      </div>
    


 <!--<script type = "text/JavaScript">
         
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         
      </script>
      <body onload = "JavaScript:AutoRefresh(30000);">
    
   </body>-->
   </body>   
</html>

