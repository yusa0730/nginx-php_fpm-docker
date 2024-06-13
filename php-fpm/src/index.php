<?php
$servername = getenv("DB_HOST");
$username = getenv("DB_USER");
$password = getenv("DB_PASSWORD");
$dbname = getenv("DB_NAME");

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
  die("MySQL Connection failed: " . $connection->connect_error);
}

echo "MySQL Connected successfully<br>";

// Redis connection details
$redis_host = getenv("REDIS_HOST");
$redis_port = getenv("REDIS_PORT");

// Create Redis connection
$redis = new Redis();
try {
  $redis->connect($redis_host, $redis_port);
  echo "Redis Connected successfully<br>";
} catch (Exception $e) {
  die("Redis Connection failed: " . $e->getMessage());
}
?>

