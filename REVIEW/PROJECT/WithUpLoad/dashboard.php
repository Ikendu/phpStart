<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$userId = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT username, image FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->bind_result($username, $image);
$stmt->fetch();
$stmt->close();
?>
<h1>Welcome, <?php echo htmlspecialchars($username); ?></h1>
<img src="<?php echo htmlspecialchars($image); ?>" alt="User Image" style="max-width:200px;">
<a href="logout.php">Logout</a>
