<?php
$servername = $_SERVER['DB_HOST'];
$username = $_SERVER['DB_USER'];
$password = $_SERVER['DB_PASSWORD'];
$dbname = $_SERVER['DB_NAME'];
$port = $_SERVER['DB_PORT'];

// Create connection
$connection = new mysqli(
  $servername,
  $username,
  $password,
  $dbname,
  $port
);

// Check connection
if ($connection->connect_error) {
  die("MySQL Connection failed: " . $connection->connect_error);
}

echo "MySQL Connected successfully<br>";

$redis_host = $_SERVER['REDIS_HOST'];
$redis_port = $_SERVER['REDIS_PORT'];

// Create Redis connection
$redis = new Redis();
try {
  $redis->connect($redis_host, $redis_port);
  echo "Redis Connected successfully<br>";
} catch (Exception $e) {
  die("Redis Connection failed: " . $e->getMessage());
}
?>

