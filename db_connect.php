

<?php
/**
 * A class file to connect to database
 */
class DB_CONNECT {
  
  
    /**
     * Function to connect with the database
     */
    function connectDB() {
    
    define('DB_USER', "bc6c9bf48b4bdc"); // db user
    define('DB_PASSWORD', "ab911a61"); // db password (mention your db password here)
    define('DB_DATABASE', ""); // database name
    define('DB_SERVER', "us-cdbr-east-05.cleardb.net"); // db server



//$connect = new PDO('mysql:host=fdb22.atspace.me;dbname=2850356_mydb', '2850356_mydb', '1234m7890');
        // Connecting to mysql database
        $con = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_DATABASE,DB_USER, DB_PASSWORD);
    
        
      
        // returning connection cursor
        return $con;
    }
   
}
?>