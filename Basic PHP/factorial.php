<?php  
//Factorial number
$n=-1;

if($n<0){
    echo "Error! Factorial of a negative number doesn't exist";
}

else{
    $fact=1;
    for($i=1; $i<=$n; $i++){
    $fact*=$i;
    }
    echo "$n! is:".$fact;
}
echo '<br>';

$num=100;
for($i=1; $i<=$num; $i++){
    if($i%7==0){
        echo $i."<br>";
    }
}
?>  
