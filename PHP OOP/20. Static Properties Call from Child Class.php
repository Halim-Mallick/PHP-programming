<?php
echo "Static Properties Call from Child Class: \n";

class Pi{
    public static $val=3.1416;
    
}
echo Pi :: $val;


class Pi2 extends Pi{
    public function info(){
        return parent  :: $val;
    }
}
$obj =new Pi2();
echo "\n" .$obj->info();
?>
