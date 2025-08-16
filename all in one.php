<?php

echo"Hello World\n";

$a=2;
$b=2;
$sum=$a+$b;
echo $sum."\n";

echo phpversion();
echo "\n";
$x=20;
function myTest(){
    global $x;
    echo "Variable x inside function is: $x \n";
}

myTest();
echo "Variable x inside function is:$x \n";

$name = 'Linus';
echo '<h1>Hello $name ';
echo "Hello $name \n";

//php data type
$x='Hello wordl';
$Y="Hello world";
$z=23;
$a=["1","2", 3];
echo var_dump($x);
echo var_dump($z);
echo var_dump($a);

//Diffrernt type of array
$student=["halim", "Selim", "Rahim"];
echo "**Index Arry \n";
echo "$student[1] \n";
echo "$student[0] \n";

echo "**Associative Array \n";

$student=[
    "name"=>"Halim",
    "Dept"=>"Cse",
    "Roll"=>47
    ];
    
echo $student['name']. "\n";
print_r($student);
var_dump ($student);

echo "\n Using Loop\n";
foreach ($student as  $key=>$value){
    echo "$key:$value \n";
    }
echo "Json=".json_encode($student);
echo "\n\n **Multidimentional array";

$student=[
    ["halim","22", "Dhaka"],
    ["dalim", 10, "Bogura"]
    ];
echo "\n". $student[0][1];


?>
