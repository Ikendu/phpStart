<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Check for empty fields or mismatched passwords
    if (empty($username) || empty($email) || empty($password) || ($password !== $confirm_password)) {
        echo "Please fill out all fields and make sure passwords match.";
    } else {
        // Check if username or email already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            echo "Username or email already exists.";
        } else {
            // Hash password and save the user
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $hashed_password);
            if ($stmt->execute()) {
                echo "Registration successful!";
                header("Location: loginPage.php");
            } else {
                echo "Something went wrong.";
            }
        }
        $stmt->close();
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
    <style>
        /* Basic CSS styling */
        body { font-family: Arial, sans-serif; }
        .form-container { max-width: 400px; margin: auto; }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%; padding: 10px; margin: 5px 0;
        }
        input[type="submit"] { width: 100%; padding: 10px; background: #007BFF; color: white; }
        /* .formCeter{margin-top: 100px} */
    </style>
</head>
<body>
     <?php
    include "header.html"
    ?>
<div class="form-container formCeter">
    <h2>Register</h2>
    <form action="registerPage.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <input type="submit" value="Register">
    </form>
</div>
 <?php
    include "footer.html"
    ?>
</body>
</html>
