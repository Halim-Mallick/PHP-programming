<?php 
function PrintN($i){
    if($i>10){
        return;
    }
    echo $i;
    echo "<br>";
    ++$i;
    PrintN($i);   
}

PrintN(1);
//Set Start point and end point
echo "Start point<br>";
function printNu($start,$end,$steppin=2){
    if($start>$end){
        return;
    }
    echo $start."<br>";
    
    $start+=$steppin;
    printNu($start,$end,$steppin);
}
printNu(1,20,3);
echo "End point"
?>
