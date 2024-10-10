<!DOCTYPE HTML>  
<html>
<head>
  <link rel='stylesheet' href="style.css"/>
</head>
<body>  

<?php
// Connect Database
$server = "localhost";
$username = "root";
$password = "";
$database = "digitsl";

$sql = new mysqli($server, $username, $password);


// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST['name'])){
    $nameErr = 'Name is empty';
  } else{
    $name = test_input($_POST["name"]);
  }

  if(empty($_POST['email'])){
    $emailErr = 'Email is required';
  } else {
    $email = test_input($_POST["email"]);
  }
  
  if(!empty($_POST['website'])){
    $website = test_input($_POST["website"]);
  } else {
    $websiteErr = "The website field is required";
  }
  
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<section>
  
<form method="post" action="<?php echo htmlspecialchars("form.php");?>">  
  <h2>PHP Form Validation Example</h2>
    <!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   -->
  <div>
    <label for="name">Full Name:</label>
    <input type="text" name="name" id="name"><span class='error'><?php echo $nameErr; ?></span>   
  </div>
  
  <div>
    <label for="email">Your E-mail:</label> 
    <input type="text" name="email" id="email"><span class='error'><?php echo $emailErr; ?></span>   
  </div>
   
  <div>
    <label for="website">Website:</label>     
    <input type="text" name="website" id="website">
  </div>

  <div>
     <label for="comment">Comment:</label>  
     <textarea name="comment" rows="5" cols="40" id="comment"></textarea>
  </div>
  <div>
    <label for="gender">Gender:</label> 
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
  </div>  
  <input type="submit" name="submit" value="Submit">  
</form>
</section>

<?php

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
echo "<br>";

date_default_timezone_set("Africa/Lagos");
// $nextyear = strtotime("next year");
echo 'Copyright 1999 - '. date('l h:i:sa:d-m-Y ');
echo "<br>";
$d=mktime(11, 14, 54);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

</body>
</html>