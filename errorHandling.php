<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Error Handling</h1>
    <?php
        $divisor = 0;
        $dividend = 10;

        // $result = $dividend/$divisor;

        function errorChecker($divs, $divd){
            if($divs == 0){
                throw new Exception("Division by zero");
            } else{
                return $divd/$divs;
            }
        }

        try{
            $result = errorChecker(0, 10);
            echo $result;
        }catch(Exception $e){
            echo "Unable to divide <br>";
            echo $e . '<br>';
            $message = $e->getMessage();
            $file = $e->getFile();
            $code = $e->getCode();
            $line = $e->getLine();
            echo "<br> $file";
            echo "<br> $code";
            echo "<br> $line";
            echo "<br> $message";
        } finally{
            echo '<br>Run no matter what';
        }


        echo "<br><br>The page is still working at this stage";
        
        ?>
</body>
</html>