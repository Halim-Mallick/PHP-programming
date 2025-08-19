<?php 
echo "Inheritence in OOP-When a class derive from another class: \n+ Access Modifier: \n";
class Fruits{
    public $name;
    public $color;
    
    public function __construct($name, $color){
        $this->name=$name;
        $this->color=$color;
    }
    
    protected function intro(){
        echo "The Fruits Name is {$this->name} & Color is {$this->color} \n";
    }
}

class Strawberry extends Fruits{
    public function message(){
        echo "Am i a ruit or a berry: ";
        $this->intro();  // Call protected method from within derived class - OK
    }
}

$strawberry=new strawberry('Strawberry','Red');
$strawberry->message(); // OK. message() is public
$strawberry->intro(); // ERROR. intro() is protected
?>
