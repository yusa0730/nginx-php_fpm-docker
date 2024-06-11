<?php
$servername = "mysql";
$username = "myuser";
$password = "mypassword";
$dbname = "mydatabase";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>

