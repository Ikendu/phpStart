<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "digital";

$conn = new mysqli($server, $username, $password, $database);

if($conn->connect_error){
    die("Connection failed " . $conn->connect_error);
} else {
    echo "Connection to Database was successfull <br>";
}

// $sql = "CREATE DATABASE digital";

// if($conn->query($sql)){
//     echo "Database was successfully created <br>";
// } else {
//     echo "Error encounted in creating database  <br>" . $conn->error;
// }

// $sql = "CREATE TABLE students (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(30) NOT NULL,
// email VARCHAR(30) NOT NULL,
// address VARCHAR(100),
// date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql)){
//     echo "Table created successfully";
// } else {
//     echo "Error in creating table " . $conn->error;
// }

$sql ="INSERT INTO students (name, email, address) VALUES ('Younglife Obi', 'younglifeobi@gmail.com', 'Digital Dream Nsukka, Enugu' );";
$sql .="INSERT INTO students (name, email, address) VALUES ('Chibike', 'bike@gmail.com', 'Achara Layout, Enugu');";
$sql .="INSERT INTO students (name, email, address) VALUES ('Gift', 'gift@gmail.com', 'Ekulu, Enugu');";


if($conn->multi_query($sql)){
    $id = $conn->insert_id;
    echo "Users created successfully with an ID of: " . $id . "<br>";
    
} else {
    echo "User not added" . $conn->error;
}
echo "<br>";
// print_r($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Database Connetion</h1>
</body>
</html>