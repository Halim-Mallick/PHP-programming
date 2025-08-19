<?php 
echo "Class & Object in OOP: \n";

class Man{ //class
    public $name; //property
    public $age;
    public $address;
    
    function info($name,$age, $address){ //method
        $this->name=$name;
        $this->age=$age;
        $this->address=$address;
        echo "Name: ". $this->name . " Age: " .$this->age . " Address: ". $this->address;
    }
}

$halim=new Man("bd"); //object
$halim->info("Halim", "20", "Dhaka");
echo "\n2nd Object \n";

$dalim=new Man();
$dalim->info("Dalim",19, "Bogura");


?>
