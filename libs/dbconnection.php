<?php

echo "<pre>";
print_r("aaaaaaaaaaaaaaaaaaaaaaaaa");
exit();
$config = require 'config.php';

$servername = $config['dbCredentials']['servername'];
$username = $config['dbCredentials']['username'];
$password = $config['dbCredentials']['password'];
$database = $config['dbCredentials']['dbName'];

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
//    echo "Connected successfully";
}
?>