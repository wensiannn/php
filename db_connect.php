<?php
$servername = "us-cdbr-east-05.cleardb.net";
$username = "bc6c9bf48b4bdc";
$password = "ab911a61";

try {
  $conn = new PDO("mysql:host=$servername;dbname=heroku_837ba537cdc8b69", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>