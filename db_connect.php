<?php
$servername = "us-cdbr-east-05.cleardb.net";
$username = "bc6c9bf48b4bdc";
$password = "ab911a61";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

