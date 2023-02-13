<?php
$default_lat=23.33;
$default_lon=30.12;

$user_lat=2;

//Use ternary operator
$lat=isset($user_lat)? $user_lat: $default_lat;
echo $lat;
echo '<br>';

//use if else
if(isset($user_lat)){
    $lat=$user_lat;
    echo $lat;
}
else{
    $lat=$default_lat;
    echo $lat;
}
echo '<br>';

//Use null coalescing operator
$lat=$user_lat??$default_lat;
echo $lat;

?>
