<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $server = "localhost";
    $username = "root";
    $password = ""; 
    $database = "ezeuba";

    // using procedural style to connect
    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die("An error occored <br>");
    }
    echo "{$username} connection was successful <br>";

    // creating a database
    // $create = "CREATE DATABASE ezeuba";

    // if(mysqli_query($conn, $create)){
    //     echo "connection successfull <br>";
    // } else {
    //     echo "database creation not successfull <br>";
    // }

    // $userstable = "CREATE TABLE users (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     name VARCHAR(30) NOT NULL,
    //     address VARCHAR(100) NOT NULL,
    //     phone VARCHAR(30) NOT NULL,
    //     email VARCHAR(50) NOT NULL,
    //     date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    // )";

    $students = "CREATE TABLE students (
        id INT(6) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(20) NOT NULL,
        email VARCHAR(50) NOT NULL,
        reg_num VARCHAR(30) NOT NULL,
        address VARCHAR(200),
        time TIMESTAMP ON UPDATE CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if(mysqli_query($conn, $students)){
        echo "Table created successfully <br>";
    }else {
        echo "Error in creating table <br>" . mysqli_error($conn);
    }
    // using object oriented style
    // $conn = new mysqli($server, $username, $password);

    // if($conn->connect_error){
    //     die("An error occured");
    // }
    // echo "connection successfull";
    ?>
</body>
</html>