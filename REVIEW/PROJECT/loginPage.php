<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check if the user exists
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();
        // Verify password
        if (password_verify($password, $hashed_password)) {
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No account found with that username.";
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <style>
        /* Basic CSS styling */
        body { font-family: Arial, sans-serif; }
        .form-container { max-width: 400px; margin: auto; }
        input[type="text"], input[type="password"] {
            width: 100%; padding: 10px; margin: 5px 0;
        }
        input[type="submit"] { width: 100%; padding: 10px; background: #007BFF; color: white; }
    </style>
</head>
<body>
    <?php
    include "header.html"
    ?>
<div class="form-container formCeter">
    <h2>Login</h2>
    <form action="loginPage.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</div>
 <?php
    include "footer.html"
    ?>
</body>
</html>
