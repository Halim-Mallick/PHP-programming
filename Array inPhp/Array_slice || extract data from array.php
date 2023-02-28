?php
$data=array('Apple','Banana','Jackfruit','Orange','Mango');

print_r(($data));

echo "<br>";
$data2=array_slice($data,2,-1);
echo '<br>';
$data2=array_slice($data,1,6,true);//return with actual array key
print_r($data2);
echo "<br>";
//Extract from associative array
echo '<br>Extract from associative array<br>';
$newdata=array('a'=>12,'b'=>20,'c'=>8,'d'=>90, 'e'=>45, 18=>36, 'f'=>'22');

print_r($newdata);
echo "<br>";
$newdata2=array_slice($newdata,3,null,true);

print_r($newdata2);
?>
