<?php
//Unlimited argument passed
function sum(int ...$number): int{
    $res=0;
    for($i=0; $i<count($number);$i++){
        $res+=$number[$i];
    }
    return $res;
}
$n=5;
$n2=15;
$n3=15;
echo sum($n,$n2,$n3);
?>
