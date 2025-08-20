<?php 
echo "Constant: \n";

class Goodbye{
    const LEAVING_MESSAGE="Thanks for watching";
    
    public function bye(){
       return self :: LEAVING_MESSAGE;
    }
}

$obj=new Goodbye();
echo $obj->bye();

?
