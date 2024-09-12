<!DOCTYPE html>
<html>
    <head>
       <link rel='stylesheet' href="app.css"/>
    </head>
<body>


<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="text" name="search" placeholder="Search">
    <br>
  Name: <input type="text" name="fname">
  <br>
  address: <input type="text" name="address">
  <br>
  school: <input type="text" name="school">
  <br>
  age: <input type="text" name="age">
  <br>
  <input type="submit">
</form>

<?php
// $_REQUEST = ['fname'=>'Obi', 'address'=>'UNN school', 'school'=>'ESUT', 'age'=>'18'];

    $name = test_input($_REQUEST['fname']);  
    $address = test_input($_REQUEST['address']); 
    $school = test_input($_REQUEST['school']);  
    $age = test_input($_REQUEST['age']);    

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    
    echo $name . '<br>'; 
    echo $address . '<br>';
    echo $school . '<br>';
    echo $age . '<br>';       
?>

</body>
</html>


<!-- <?php 
echo('Hello how are u doing today, can I come over, yes u can <br>');
echo'Here we go aga <br> <h1>Hello</h1>';

$name = "Mena";
$school = "UNN";
$amount = 4.7;

$x = 10;
$y = 4;
$ans = $x ** $y;
$mod = $x % $y;

echo "The remender of {$x}  divided by {$y} is {$mod} <br>";
// {$x} * {$y};

echo "{$name} {$school} <br>";
echo "{$name} how are u doing";
echo "The total amount is \${$amount}<br>";
echo '<br>Hello the last line is here <br>';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More on php</title>
</head>

<body>
    <form action="index.php" method="get">
        <!-- <label for="username">Radius</label><br>
        <input name="num" type="text" /><br> -->
         Name: <br>
         <input type="text" name="fname"><br>

        <label for="password">Password</label><br>
        <input name="password" type="password" /><br>

        <input type="submit" placeholder="Submit">

    </form>

   

<?php
  $name = $_REQUEST['fname'];
  $password = $_REQUEST['password'];
  echo $name . ' is my name'. '<br>';  
  echo $password . ' is my current password'. '<br>';

//   include('date.php');
$myfile = fopen('README.md', 'a+') or die('File does not exist');
 echo fread($myfile, filesize('readme.md'));
//   echo fgets($myfile);

//   $myfile = fopen('readme.md', 'a+') or die('File does not exist');
  fwrite($myfile, 'A new line is written\n');
  fwrite($myfile, 'Another line is also written\n');

//  echo fread($myfile, filesize('readme.md'));
//  fclose($myfile);
?>

</body>

</html>
<?php 

// $name = $_POST['username'] . '<br>';

// $output = null;
// $age = null;

// if(!$age){
//     $output = 'Please enter your age';
// } elseif($age > 18){
//     $output = 'You can vote';
// } elseif($age < 18){
//     $output = 'You can\'t vote' ;
// } else {
//     $output = 'Your age is invalid';
// }
// echo $output. '<br>';

// define('car', ['BMW', 'Ikendu', 'Ezendu', 'Ezeuba']);
// echo car[0] . '<br>';
// echo car[2] . '<br>';

// $x = array("blue", "yellow");  
// $y = array( "blue", "yellow");  

// var_dump($x == $y) .'<br>';

// $names = ['chuks', 'Hen', 'Mach', 'Mill'];
// foreach($names as $xy){
//     echo $xy . ' ';
// }

// $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach ($members as $x => $y) {
//   echo "$x : $y <br>";
// }
// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, '90'); 

// $cars[5] = "Volvo";
// $cars[7] = "BMW";
// $cars[14] = "Toyota";

// $copy = array("one"=>"paper", "two"=>"pen", "three"=>"pencil");
// $copy1 = ["one"=>"look", "two"=>"leap", 'three'=>'eat'];
// echo('<br>'.$copy1['three'].'<br>');

// array_push($cars, 'Merce');
// array_push($cars, 'Merce1');
// array_push($cars, 'Merce2');
// print_r($cars);
// echo $cars[5];




