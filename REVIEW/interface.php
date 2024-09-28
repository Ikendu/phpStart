<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Review Page</h1>
    <h3>experiment page</h3>

    <?php

    // Interface

    interface Animal{
        public function sound();
    }

    class Dog implements Animal{
        public function sound(){
            echo "Bark Bark...";
        }
    }

    class Cat implements Animal{
        public function sound(){
            echo "Meow Meow...";
        }
    }

    $dog = new Dog();
    $cat = new Cat();

    $animals = [$dog, $cat];

    foreach($animals as $animal){
        $animal->sound();
    }

    // Traits

    trait BuildHouse{
        public function foundation(){
            echo "<br> lay proper foundation that matches the house";
        }
    }
    class Bungalor{
        use BuildHouse;
        public function houseLevel(){
            echo "ground floor level <br>";
        }
    }

    $bungalor = new Bungalor();

    echo $bungalor->foundation();
    echo "<br>";

    ?>
    <h3><?php echo $bungalor->houseLevel(); ?></h3>

    <?php
    // Static Methods

    class Domain{
        public static function domainName(){
            echo "davidaniede.vercel.app";
        }
        function __construct(){
            self::domainName();
        }
    }
    echo "<br>". Domain::domainName() ."<br>";

    class Domain2{
        public function __construct(){
            echo Domain::domainName() . " is always open";
        }        
    }

    new Domain();
    echo "<br>";
    new Domain2();
    echo "<br>";
    $domain = new Domain();

    echo $domain->domainName() . " Trying out";

    ?>
</body>
</html>