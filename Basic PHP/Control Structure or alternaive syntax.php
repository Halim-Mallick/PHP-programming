<?php
//Norlam statement
$N=20;

if($N%2==0){
    echo "Even";
}
else{
    echo "Odd";
}

//Control Structer/alternative syntax
echo PHP_EOL;
echo '<br>';

if ($N%2==0):
    echo "Even number";

else:{
    echo "Odd number";
}
endif;

//switch case
echo "<br>";
switch($N):
    case($N%2==0):
        echo "Even";
        break;
    default:
        echo "Odd";
    endswitch;
?>
