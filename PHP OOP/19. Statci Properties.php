<?php
echo "Statci Properties: \n";

class Pi{
    public static $Pi=3.1416;
    
}
echo Pi :: $Pi;


class Pi2{
    public static $val=3.1416;
    public static function info(){
        return Pi2  :: $val;
    }
}
echo "\n". Pi2 :: info()
?>
