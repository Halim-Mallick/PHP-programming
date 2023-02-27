<?php
$person =[
    'Fname'=>'Halim',
    'Lname'=>'Mallick'
];

//Data Remove from Associative Array
print_r($person);

unset($person['Lname']);
print_r($person);

?>
