<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: loginPage.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <?php include "header.html"?>
    <section class="formCenter">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p><a href="logout.php">Logout</a></p>
        
    </section>
    <?php include "footer.html"?>
</body>
</html>
