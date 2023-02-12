<?php

//Even Odd
$num=15;
if ($num%2==0){
    echo "$num is Even Number <br>";
}
else{
    echo "$num is Odd Number <br>";
}

//biggest number
$n1=1;
$n2=1;
$n3=0;

if($n1>$n2 && $n1>$n3){
    echo "$n1 is Biggest Number";
}

elseif($n2>$n3 && $n2>$n1){
    echo "$n2 is Biggest number";
}

elseif($n3>$n1 && $n3>$n2){
    echo "$n3 is Biggest Number";
}
else{
    if($n1==$n2 && $n1==$n3){
        echo "Both are equal";
    }
    elseif($n2==$n3){
        echo "$n2 is equal $n3";
    }
    elseif($n2==$n1){
        echo "$n2 is equal $n1";
    }
}

echo "<br>";

//Teenager or not
$age=19;

if($age>13 && $age<=19){
    echo "He is teen ager and he $age year old";
}
else{
    echo "He is not teen ager";
}
?>
