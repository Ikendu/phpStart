<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $myFile = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
    $finalCheck = 1;
    // getimagesize($_FILE["fileToUpload"]["tmp_name"]);
    // file_exists($myFile);
    // $_FILES["fileToUpload"]["size"] > 500000;
    // strtolower(pathinfo($myFile, PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $myFile);
    ?>
</body>
</html>