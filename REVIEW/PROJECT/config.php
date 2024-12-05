<?php
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "users"; // replace with your database name

// Create connection
$conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
