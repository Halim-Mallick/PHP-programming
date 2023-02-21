<?php
$student=[
    "Name: Halim, ",
    " Roll: 47, ",
    " Semester: 6th, ",
    " Shift: Evening, "
];

$student[1]="Roll-52,"; //Replaced an array elements
echo $student[1]."<br>";
$n=count($student);

for($i=0; $i<$n; $i++){
    echo $student[$i];
}
echo "<br><br>Delete Last Elements:<br>";
// Delete an Last Element
array_pop($student); 
$n=count($student);
for($i=0; $i<$n; $i++){
    echo $student[$i];
}
echo "<br><br>Delete first Element<br>";
// Delete an Last Element
array_shift($student);
$n=count($student);
for($i=0; $i<$n; $i++){
    echo $student[$i];
}
echo "<br><br>Push an Element<br>";
//Push An Array Elements
$student[]="Robin, ";
array_push($student,'Rotna');
$n=count($student);
for($i=0; $i<$n; $i++){
    echo $student[$i];
}

echo "<br><br>Push in first Element<br>";
//Push An Array Elements
array_unshift($student,'MyEx, ');
$n=count($student);
for($i=0; $i<$n; $i++){
    echo $student[$i];
}
?>
?> 
