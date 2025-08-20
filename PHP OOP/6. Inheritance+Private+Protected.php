<?php 
echo "Access Modifier: \n";

class Man{
    public $name;
    private $age;
    
    public function __construct($n, $a){
        $this->name=$n;
        $this->age=$a;
    }
    
    private function info(){
        echo "Name: {$this->name} Age: {$this->age}";
    }
}

class father extends Man{
    public function faInfo(){
        echo "I love my father\n";
        echo $this->info(); // error because info method private, can use only own class
    }
}

$father=new father('Antaj', 40);
$father->faInfo();
//$father->info(); // Fatal error showing
?>
