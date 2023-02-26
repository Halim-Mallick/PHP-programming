<?php
//Copy by value/Deep Copy
$data=Array(
    'fname'=>'Hello',
    'Lname'=>'World'
);

echo"Copy by value/Deep Copy: <br>";
$newdata=$data;
$newdata ['Lname']=' Pluto';
print_r($data);
echo "<br>";
print_r($newdata);

//Copy by Refference/Shallow Copy
$data2=Array(
    'fname'=>'Robin',
    'Lname'=>'Ahmed'
);
echo"<br><br>Copy by Refference/Shallow Copy: <br>";
$newdata2=&$data2;
$newdata2['Lname']='Mia';
print_r($data2);
echo "<br>";
print_r($newdata2);
echo '<br><br> Another New function for more details: <br>';
//Another New details using function
function printdata(&$data){
    $data ['Lname'].=' Changed';
    print_r($data);
}
printdata($data);
echo "<br>";
print_r($data);
?>
