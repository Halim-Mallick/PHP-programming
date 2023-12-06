<?php
$array=array(1,2,3,4,);


foreach($array as &$value){
    $value=$value*2;
    echo $value." ";
    
}
unset($value);
echo "\n";
foreach($array as $key=>$value){
    echo "{$key}=>{$value} \n";
  
}
  print_r($array);
?>
