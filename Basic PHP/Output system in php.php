<?php
$name='earth';
$age=16;

//normal print
echo $name;
echo nl2br("\n");

//other print
var_dump($name);
echo nl2br("\n");
var_dump($age);
echo nl2br("\n");

$upname=strtoupper($name);
echo "We're living on {$upname}";

//printf
$fname='Halim';
$lname='Mallick';

printf("<br>my name is %s %s",$fname,$lname);
printf("<br>my name is %s %s",strtoupper($fname),strtolower($lname));

?>
