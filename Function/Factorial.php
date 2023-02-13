<?php
function factorial(/*int*/$s){ //use type hinting for detect integer or not
    if(gettype($s)!="integer"){
        return "$s is not a integer is here! Only integer is possible to factorial";
    }
    elseif($s<0){
        return "Negative Value not possible";
    }
    $result=1;
    for($i=1; $i<=$s; $i++){
        $result*=$i;
    }
    return $result;
}

$in= -1;

factorial($in);
echo "factorial is $in!=".factorial($in);

?>
