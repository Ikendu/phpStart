<?php 
// declare(strict_types=1);
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
    <form action="index.php" method="post">
        <label for="username">Radius</label><br>
        <input name="num" type="text" /><br>

        <!-- <label for="password">Password</label><br>
        <input name="password" type="password" /><br> -->

        <input type="submit" placeholder="Submit">

    </form>

</body>

</html>
<?php 

// $name = $_POST['username'] . '<br>';
$age = $_POST['num'] . '<br>';
echo $age;
$output = null;
$age = null;

if(!$age){
    $output = 'Please enter your age';
} elseif($age > 18){
    $output = 'You can vote';
} elseif($age < 18){
    $output = 'You can\'t vote' ;
} else {
    $output = 'Your age is invalid';
}
echo $output. '<br>';

define('car', ['BMW', 'Ikendu', 'Ezendu', 'Ezeuba']);
echo car[0] . '<br>';
echo car[2] . '<br>';

$x = array("blue", "yellow");  
$y = array( "blue", "yellow");  

var_dump($x == $y) .'<br>';

$names = ['chuks', 'Hen', 'Mach', 'Mill'];
foreach($names as $xy){
    echo $xy . ' ';
}

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, '90'); 

$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";

$copy = array("one"=>"paper", "two"=>"pen", "three"=>"pencil");
$copy1 = ["one"=>"look", "two"=>"leap", 'three'=>'eat'];
echo('<br>'.$copy1['three'].'<br>');

array_push($cars, 'Merce');
array_push($cars, 'Merce1');
array_push($cars, 'Merce2');
print_r($cars);
echo $cars[5];


?>