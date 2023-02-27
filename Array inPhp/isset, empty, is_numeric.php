<?php
$num='';

if(isset($num)){
    echo "Number is set";
}
else{
    echo "Number is not Set";
}

//Check Empty or not
printf("<br>");
if(empty($num)){
    echo "Number is Empty";
}
else{
    echo "Not Empty";
}
printf("<br>");

//Check another way for better expect
if(isset($num) && (is_numeric($num) || $num='')){
    echo "Nme is set & it's not empty";
}
else{
    echo "Nme isn't set & it's empty";
}
?>
