<?php
$data=array(
    "Name: halim",
    "Roll=10",
    "Semester=6th",
);
//Different Way to array declare

$students=["Name: Mallick, Roll: 47, Seme: 6th"];

echo $data[0];
echo '<br>';
var_dump($data);

//Count Elements
echo "<br>Tota element of array: <br>";
echo count($data)."<br>";

//Count by loop
$n=count($students);
for($i=0; $i<$n; $i++){
    echo $students[$i];
}
echo "<br>";
//Reverse print

for($i=$n-1; $i>=0; $i--){
    echo $students[$i];
}
?>
