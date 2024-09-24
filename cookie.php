<?php
setcookie("user", "Ezeuba", time() + (30 * 86400),  "/");
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>The cookie page</h1>
    <?php
      $_SESSION["fullname"] = "Ezeuba Plenty";
      $_SESSION["address"] = "5 Aku road";
      $_SESSION["school"] = "UNN school";
      echo $_COOKIE["user"] . "<br>";
      echo $_SESSION["fullname"] . "<br>";
      echo $_SESSION["school"] . "<br>";
    
    ?>
    
  </body>
</html>