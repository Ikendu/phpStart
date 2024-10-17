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
$database = "digital";

$sql = new mysqli($server, $username, $password, $database);

// if($sql->connect_error){
//   echo "Connection Error ".$sql->connect_error;
// } else{
//   echo "Connect went well";
// }


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

$statement = $sql->prepare("INSERT INTO users (fullname, email, comment, website, gender) VALUES (?, ?, ?, ?, ?)");
$statement->bind_param("sssss", $name, $email, $comment, $website, $gender);
if($name != ""){
   if($statement->execute()){
    $name = $email = $gender = $comment = $website = "";
  }
} else {
    echo("User details is empty");
}

$statement->close();

// $deleteData = "DELETE FROM users where fullname=''";
// if($sql->query($deleteData)){
//   echo"Empty data deleted successfully";
// }

// $querstring = "SELECT fullname, email, comment, website, gender FROM users WHERE gender='male' ";
// $querstring = "SELECT * FROM users LIMIT 10 OFFSET 20";


// $deleter = "DELETE FROM users WHERE fullname=''";
// if($sql->query($deleter)){
//   echo "Deleted successfully";
// }else {
//   echo $sql->error;
// }

// $update = "UPDATE users SET fullname='Emeka Eze', comment='I am getting better with php' WHERE fullname='Emeka' ";
// $sql->query($update);

$querystring = "SELECT * FROM users LIMIT 20 OFFSET 15"; 
// $reset = "RESET QUERY CACHE";
// $sql->query($reset); 


$result = $sql->query($querystring);
if($result->num_rows > 0){
  // Get my data
  echo"<table>
        <tr>
        <th>S/N</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Comment</th>
          <th>Website</th>
          <th>Gender</th>      
        </tr>";
  $num = 1;
  while($row = $result->fetch_assoc()){
    if($row["fullname"]){
       echo "<tr>
            <td>{$num}</td>
            <td>{$row["fullname"]}</td>
            <td>{$row["email"]}</td>
            <td>{$row["comment"]}</td>
            <td>{$row["website"]}</td>
            <td>{$row["gender"]}</td>
          </tr>";
    }   
    $num++;
  }

    echo "</table>";
} else {
  echo "Empty Database";
}

$sql->close();
header("Location: " . $_SERVER["PHP_SELF"]);
  exit();

// print_r($result);

date_default_timezone_set("Africa/Lagos");
// $nextyear = strtotime("next year");
echo 'Copyright 1999 - '. date('l h:i:sa:d-m-Y ');
echo "<br>";
$d=mktime(11, 14, 54);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

</body>
</html>