<?php
// Connecting to database
$server = "localhost";
$username = "root";
$password = "";
$database = "workers";


$conn = new mysqli($server, $username, $password, $database);

// Table created
// $newtable = "CREATE TABLE emplorer (
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   name VARCHAR(20) NOT NULL,
//   email VARCHAR(50) NOT NULL,
//   gender VARCHAR(10),
//   comment VARCHAR(200),
//   website VARCHAR(100),
//   date TIMESTAMP ON UPDATE CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// )";

// if($conn->query($newtable)){
//   echo "Table created successfully";
// } else {
//   echo "Table not created $conn->error";
// }

// if($conn->connect_error){
//   die("Connection error");
// }
// echo("Connection successful <br>");

// $newbase = "CREATE DATABASE workers";

// if($conn->query($newbase) === TRUE){
//   echo "Database created"; 
// } else{
//   echo "Creation failded $conn->error";
// }



$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

session_start();

?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";    
  } elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
    // check if name only contains letters and whitespace
    $nameErr = "Only letters and white space allowed";        
  } else{
    $name = test_input($_POST["name"]);
    setcookie("user", $name, time() + (86400 * 30), "/");
    $_SESSION["user"] = $name;
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";

  } else {
    $email = test_input($_POST["email"]);
    $_SESSION["email"] = $email;
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    $_SESSION["website"] = $website;
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
    $_SESSION["comment"] = $comment;
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    $_SESSION["gender"] = $gender;
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Age: <input type="number" name="" id="" min="16" max="60">
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if($emailErr || $nameErr || $websiteErr || $genderErr){
    echo 'Check the form for errors and try again';
} else {
  echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;  
}

// Push data to database
// $saveDate = $conn->prepare("INSERT INTO emplorer (name, email, gender, comment, website) VALUES (?, ?, ?, ?,?)");
// $saveDate->bind_param("sssss", $name, $email, $website, $comment, $gender);
// if($saveDate->execute()){
//   echo "Emplorer details inserted";
// }else {
//   echo "Details not created";
// }
;

// $getData = "SELECT name, email, gender, comment, website FROM emplorer ORDER BY name";
$getData = "SELECT * FROM emplorer LIMIT 10";

$result = $conn->query($getData);

$row = $result->num_rows;
// echo "hello";

if($row > 0){  
  echo "<table><tr><th>Name</th><th>Email</th><th>Gender</th><th>Comment</th><th>Website</th></tr>";
  while($array = $result->fetch_assoc()){
    echo "<tr><td>{$array['name']}</td><td>{$array['email']}</td><td>{$array['gender']}</td><td>{$array['comment']}</td><td>{$array['website']}</td>";
  }
  echo "</table>";
}

// Delete data from database
$deleter = "DELETE FROM emplorer WHERE id=105";

if($conn->query($deleter) === TRUE){
  echo "data deleted successfully";
} else {
  echo "Not deleted";
};

$updater = "UPDATE emplorer SET name='Gift Onyii' WHERE id='3'";

if($conn->query($updater) === TRUE){
  echo "Data updated successfully";
} else {
  echo "Update failed";
}

$conn->close()

// if($conn->query($saveDate)){
//   echo "Emplorer details inserted";
// } else {
//   echo "Details not created";
// }


?>
<br>
&copy; 2020 - <?php echo date("Y"); ?>
<br>
<?php date_default_timezone_set('Africa/Lagos'); ?>
<?php echo "The time is " . date("h:i:sa"); ?>
<br>


<?php

 
// $d = mktime(11, 14, 54, 8, 12, 2014);
// $dt = strtotime("April 15 2014 10:30pm ");
// echo "Created date is " . date("m-Y-d h:i:sa", $d).'<br>';
// echo date("d-m-Y h:i:sa", $dt) . '<br>';

// $startday = strtotime('Saturday');
// $endday = strtotime('+9 weeks', $startday);

// while($startday < $endday){
//     echo date('M d', $startday).'<br>';
//     $startday = strtotime('+1 week', $startday);
// }

?>
</body>
</html>