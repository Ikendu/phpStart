<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My text page</h1>
    <?php
    $myfile = fopen('mytext.txt', 'a');

    fwrite($myfile, "His name is Peter Obi\n");
    fwrite($myfile, "I was a presidential candidate\n");
    fwrite($myfile, "I am your future president\n");
    fclose($myfile);
    ?>
    
</body>
</html>