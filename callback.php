<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function showItem($item){
        return strlen($item);
    }

    $items = ["apple", "orange", "banana", "coconut"];

    $allItems = array_map('showItem', $items);

    print_r($allItems);


    echo '<br>';
    echo $allItems[1];

    echo '<br>';
    echo $allItems[0];
    echo '<br>';


//  more examples
    function doubleItem($item){
        return $item . " ".$item;
    }

    function includer($item){
        return $item . " have a great day.";
    }

    function mainMachine($simpleMachine, $value){
        $result = $simpleMachine($value);
        echo $result;
        return $result;
    }

    function division($upper, $lower){
        if($lower == 0) {
        throw new Exception("Division by zero");
    }
        echo $upper/$lower;        
    }

    try{
    // mainMachine("doubleItem", "100");
    division(10, 0);
    }catch(Exception $e){
        // echo "The value entered is invalid";
        echo $e->getMessage();
        echo "<br>";
        echo $e->getLine();
    }
    
    echo "<br>";
    mainMachine("includer", "Ezeuba");

     $fromBase = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
    
     $storeItems = json_encode( $fromBase);
    echo "<br>";
     print_r($storeItems);
     echo "<br>";

     $useData = json_decode($storeItems, true);

    print_r($useData);

    echo "<br>";
    echo $useData["Peter"] . " we getting it";
    echo "<br>";

    // echo $useData->Peter;

    // $myArray = 'array("Peter"=>35, "Ben"=>37, "Joe"=>43)'; this invalid

    // $myArray = '{"Peter":35,"Ben":37,"Joe":43}';
    // // $fromBase = {"Peter":35,"Ben":37,"Joe":43};
    //  $fromBase2 = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

    ?>
</body>
</html>