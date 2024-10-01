<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class Animal{
        public $name;
        public $color;
        public $legs;
        public $sound;

        // .........................................for name
        function addName($n){
            $this->name = $n;
        }
        // ...................................................for color
        function addColor($c){
            $this->color = $c;
        }
         // .........................................for name
        function addLegs($n){
            $this->legs = $n;
        }

        // ...................................................for color
        function addSound($s){
            $this->sound = $s;
        }

        function showAnimal(){
            echo $this->name . " is my name <br>";
            echo $this->legs . " is the nums of legs I have <br>";
            echo $this->color . " is my color <br>";
            echo $this->sound . " is my the sound of my voice <br>";
        }
    }

    $dog = new Animal();
    $dog->addName("Dog"); //this method is adding the name    
    $dog->addLegs(4);
    $dog->addSound("Wooff");
    $dog->addColor('White');
    $dog->showAnimal(); //this method display the animal properties

    echo $dog->name;

    echo "<br>";

    $hen = new Animal();
    $hen->addName("hen");
    $hen->addLegs(2);
    $hen->addColor("Brown");
    $hen->addSound("kokoko");
    $hen->showAnimal();

    echo $hen->name;







    ?>
    
</body>
</html>