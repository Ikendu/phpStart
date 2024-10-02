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

    // using OBJECT style to connect
    $conn = new mysqli($server, $username, $password, $database);

    if($conn->connect_error){
        die("An error occured: $conn->connect_error <br>");
    }
    // echo "{$username} connection was successful <br>";

    // creating a database
    // $create = "CREATE DATABASE ezeuba";

    // if($conn->query($create) === TRUE){
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
        address VARCHAR(200),
        reg_num VARCHAR(30) NOT NULL,
        time TIMESTAMP ON UPDATE CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if($conn->query($students) === TRUE){
        echo "Table created successfully <br>";
    }
    // else {
    //     echo "Error in creating table: " . mysqli_error($conn);
    // }

    $adduser = "INSERT INTO students (name, email, address, reg_num) VALUES ('Ezeuba1', 'ezuba@gmail.com', '20 dadelalla Ekpoma', '2017/20202020');";
    $adduser .= "INSERT INTO students (name, email, address, reg_num) VALUES ('Obinna', 'obinna@gmail.com', '30 Nana Street', '2017/40505');";
    $adduser .= "INSERT INTO students (name, email, address, reg_num) VALUES ('Adeze', 'adaeze@gmail.com', '35 Okama', '3020/8390eu')";
    if($conn->multi_query($adduser)){
        echo "New record created";
    }else{
        echo "user not created";
    }
    print_r($conn)
    // connecting to database
    // $conn = new mysqli($server, $username, $password);

    // if($conn->connect_error){
    //     die("An error occured");
    // }
    // echo "connection successfull";
    ?>
</body>
</html>