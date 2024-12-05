<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Image Upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $targetDir = "uploads/";
        $imageName = basename($_FILES['image']['name']);
        $targetFile = $targetDir . uniqid() . "_" . $imageName;
        $imageType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Validate file type
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageType, $allowedTypes)) {
            die("Invalid file type.");
        }

        // Move uploaded file
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $stmt = $conn->prepare("INSERT INTO users (username, password, image) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $password, $targetFile);
            if ($stmt->execute()) {
                echo "Registration successful!";
                header("Location: login.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            die("File upload failed.");
        }
    } else {
        die("Image file is required.");
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="file" name="image" accept="image/*" required>
    <button type="submit">Register</button>
</form>
