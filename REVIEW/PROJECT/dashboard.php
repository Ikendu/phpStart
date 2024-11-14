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
    <title>Dashboard</title>
</head>
<body>
    <?php include "header.html"?>
    <a href="index.html">BR Homes</a>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
