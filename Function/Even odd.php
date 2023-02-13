<?php
$input=10;
function IsEven($n){
    if($n%2==0){
        return true;
    }
    return false;
}

if(IsEven($input)){
    echo "{$input} is Even Number";
}
else{
    echo "{$input} is Odd Number";
}
?>
