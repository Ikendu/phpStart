<!DOCTYPE html>
<html>
    <head>
        <style>
            [name="search"]{
                width: 10%;
                background-image: url(search.png);
                background-position: 5px 5px;
                padding: 10px;
                padding-left: 40px;
                background-repeat: no-repeat;
                border-radius: 15px;
            }
            [name='search']:focus{
                width: 50%;
                background-color: blue;                
                /* transition: width 0.5s ease-in-out ; */
                transition: width 0.3s ease-in-out;
                
            }
        </style>
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

echo $_POST["username"] . '<br>';
echo $_POST["password"] . '<br>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="username">Username</label><br>
        <input name="username" type="text" /><br>

        <label for="password">Password</label><br>
        <input name="password" type="password" /><br>

        <input type="submit" placeholder="Submit">

    </form>

</body>

</html> -->

