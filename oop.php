<?php

class MyClass{
    public $name;
    public $email;
    public $age;

    function __construct($age){
        $this->age = $age;
    }

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }
}

$myObj = new MyClass(34);
$myObj->setName("David");
$myName = $myObj->getName();

$myObj->email = "davidexe@gmail.com";
echo 'My email is' . $myObj->email . "<br>";
echo $myName . "<br>";
echo $myObj->age . "<br>";
echo $myObj->name . "<br>";
print_r($myObj instanceof MyClass);

?>