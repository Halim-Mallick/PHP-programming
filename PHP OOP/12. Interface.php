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

$dog=new Dog();
echo $dog->makeSound();

?>
