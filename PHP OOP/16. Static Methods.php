<?php
echo "Static Methods: \n ##Call from ouside Class\n";
class Man{
    static public function info(){
        echo "Man is mortal \n";
    }
}
Man:: info();
echo "Static Methods: \n ##Call from inside Class \n";

class Mobile{
    static public function model(){
        echo "Iphone ii\n";
    }
    
    public function info(){
        self:: model();
    }
}
$iphone= new Mobile();
$iphone->info();
?>
