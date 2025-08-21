<?php
echo "PHP Traits:\n";
trait Message1{
    function ms1(){
        echo "OOP is fun! \n";
    }
}

trait Message2{
    function msg2(){
        echo "This is Message 2\n";
    }
}

class Notify{
    use Message1;
}

class Welcome{
    use Message2;
}

$notice= new Notify();
$notice->ms1();
$welc= new Welcome();
$welc->msg2()
?>
