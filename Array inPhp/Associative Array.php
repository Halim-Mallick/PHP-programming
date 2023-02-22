<?php
$stdent=[
    "abc"=>"Monem",
    "12"=>"Hasan",
    "47"=>"Halim",
    "52"=>"Foni",
    "46"=>"Mehedi"
];
echo $stdent[12];
echo '<br>'.$stdent['abc'];
echo "<br><br>";

$foods=[
    "vegetable"=>"Brinjal, Brocolli, Carrot, Capsicam",
    "drinks"=>"Water, Cococola, 7up",
    "fruits"=>"Apple, Orange, Graps"
];

$foods['drinks']=$foods['drinks'].", Orange";
echo $foods['vegetable'].'<br><br>';
// $n=count($foods);
// for($i=0; $i<$n; $i++){
//     echo $foods[$i];
// }
// 
foreach($foods as $key=>$value){
    echo strtoupper($key). "=".$value."<br>";
}
?>
