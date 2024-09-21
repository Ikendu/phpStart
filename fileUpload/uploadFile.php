<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File uplaoding page</h3>
    <?php 
    $myfolder = "myFiles/";
    $myfile = $myfolder . basename($_FILES["fileToUpload"]["name"]);

    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $myfile);
    ?>
</body>
</html>