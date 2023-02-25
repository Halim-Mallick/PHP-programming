<?php
$student=[
    'fname'=>'Halim',
    'Lname'=>'Mallick',
    'Roll'=>47,
    'Batch'=>89
];

print_r($student);
echo "<br><br>";
printf('%s %s',$student['fname'],$student['Lname']);

//Associative array to string Convert
echo "<br><br>";
echo join(', ',$student); //not acceptable concept
echo "<br><br>Serialized Data:<br>";

$serialized=serialize($student); //acceptable concept
echo $serialized;

$unserialized=unserialize($serialized);
echo"<br>Unserialized Data: <br>";
print_r($unserialized);

//Most Acceptable Concept

$jsondata=json_encode($student);
echo"<br><br> JSON encode data:<br>";
print_r($jsondata);

$backjson=json_decode($jsondata,true);
echo"<br>Back to decode:<br>";
print_r($backjson);

?>
