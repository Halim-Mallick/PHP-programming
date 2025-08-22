<?php 
echo "Static Methods Access from other class: \n";

class Message{
    static public function wel(){
        echo "Welcome to Bangladesh: \n";
        
    }
}
//Accessed from another class
class Message2{
    public function wel2(){
        Message:: wel();
    }
}

$m= new Message2();
$m->wel2();

?>
