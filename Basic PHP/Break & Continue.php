<?php
 //Break statement

 for($i=1; $i<20; ++$i){
    if($i==15){
        break;
    }
    echo $i.'<br>';
 }

 for($j=1; $j<50; ++$j){
    if($j%13==0){
        echo "$j";
        break;
    }
 }
 echo "<br><br>";
 //Continue statement

 for($a=1; $a<25; ++$a){
    if($a<8){
        continue;
    }
    echo "$a <br>";
 }
?>
