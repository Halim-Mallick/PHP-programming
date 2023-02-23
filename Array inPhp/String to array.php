<?php
//String to array
$vagetable=explode(', ',"brocolli, brinjal, carrot, capsikam");//(, )=delimeter

var_dump($vagetable);
echo $vagetable[0];
//Array to String
$vegetableString=join(' ,',$vagetable);

echo "<br>".$vegetableString;
?>
