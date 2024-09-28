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
    ?>
</body>
</html>