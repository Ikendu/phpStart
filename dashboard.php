<?php 
session_start();
// $username = "user";
echo $_COOKIE["user"]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info</title>
</head>
<body>
    <h1><?php echo $_SESSION["user"] ?></h1>
    <h3><?php echo $_SESSION["email"] ?></h3>
    <h4><?php echo $_SESSION["website"] ?></h4>
    <h4><?php echo $_SESSION["comment"] ?></h4>
    <p><?php echo $_SESSION["gender"] ?></p>
</body>
</html>