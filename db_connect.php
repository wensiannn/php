

<?php
/**
 * A class file to connect to database
 */
class DB_CONNECT {
  
  
    /**
     * Function to connect with the database
     */
    function connectDB() {
    
    define('DB_USER', "3187555_db"); // db user
    define('DB_PASSWORD', "Kotz46aa"); // db password (mention your db password here)
    define('DB_DATABASE', "3187555_db"); // database name
    define('DB_SERVER', "fdb22.atspace.me"); // db server



//$connect = new PDO('mysql:host=fdb22.atspace.me;dbname=2850356_mydb', '2850356_mydb', '1234m7890');
        // Connecting to mysql database
        $con = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_DATABASE,DB_USER, DB_PASSWORD);
    
        
      
        // returning connection cursor
        return $con;
    }
   
}
?>