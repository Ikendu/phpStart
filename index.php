<?php 
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

</html>