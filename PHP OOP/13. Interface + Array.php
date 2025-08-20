<?php
echo"PhP Interface \n";

interface Animal{
    function makeSound();
}

class Dog implements Animal{
    function makeSound(){
        return "Woof Woof\n";
    }
}
class Cat implements Animal{
    function makeSound(){
        return "Meaw \n";
    }
}

class Cow implements Animal{
    function makeSound(){
        return "Hamba";
    }
}
$dog=new Dog();
$cat=new Cat();
$cow= new Cow();

$animals=array($dog, $cat, $cow);

foreach ($animals as $animal){
    echo $animal->makeSound();
}

?>
