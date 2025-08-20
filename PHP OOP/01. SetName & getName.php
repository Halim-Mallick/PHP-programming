<?php
echo "PHP OOP: \n";

class Fruits{
    public $name;
    public $color;
    
    function setName($fname){
        $this->name=$fname;
    }
    function getName(){
        return $this->name;
    }
}
$apple=new Fruits();
$banana= new Fruits();
$apple-> setName('Apple');
$banana-> setName('Banana');

echo $apple->getName();
echo "\n";
echo $banana-> getName();

?>
