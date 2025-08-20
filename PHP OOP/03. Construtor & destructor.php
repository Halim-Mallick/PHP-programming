<?php
//Contructor Method only
echo "###Only Constructor: \n";
class Man{
    public $name;
    public $age;
    public $addrs;
    
    function __construct($n, $a, $add){
        $this->name=$n;
        $this->age=$a;
        $this->addrs=$add;
    }
    
    function info(){
        return "Name: ".$this->name. "\nAge: ".$this->age. " \nAddsree: ".$this->addrs;
    }
}
$halim=new Man('Halim', 28, 'Dhaka');
echo $halim->info();

echo"\n###Constructor And Destructor \n";

class Flower{
    public $name;
    public $color;
    
    function __construct($n, $c){
        $this->name=$n;
        $this->color=$c;
    }
    
    function __destruct(){
        echo "Name: ".$this->name ." Color:". $this->color;
    }
}
$rose=new Flower('Rose','Red');

?>
