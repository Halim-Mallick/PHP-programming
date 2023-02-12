<?php
//Nested Swith case

$n=-13;
$r=$n%2;

switch($r){
    case 0;
        switch(true){
            case $n>=0:{
                echo "This is Possitive Even number";
                break;
            }
            case $n<=0:{
                echo "This is Negative Even number";
                break;
            }
        }
    break;
    default:
    switch(true){
        case $n>=0:{
            echo "This is Possitive Odd number";
            break;
        }
        case $n<0:{
            echo "This is Negative Odd number";
            break;
        }
    }
}

//another tricks
echo '<br>';

switch(true){
    case($r==0 && $n>=0):{
        echo "$n is Possitive Even Number";
        break;
    }
    case($r==0 && $n<0):{
        echo "$n is Negative Even Number";
        break;
    }
    case($r==1 && $n>=0):{
        echo "$n is Possitive Odd Number";
        break;
    }
    case($r==-1 && $n<0):{
        echo "$n is Negative Odd Number";
        break;
    }
}

?>
