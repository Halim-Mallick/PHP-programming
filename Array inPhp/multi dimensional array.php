<?php

$foods=[
    'Vegetable'=>'Sak, Fulkopi, Badhakopi, alu',
    'fruits'=>explode(', ','Am, jam, kola'),
    'drinks'=>'pepsi, 7up, cock'
];
print_r($foods);
ECHO "<bR><BR>";

array_push($foods['fruits'],'orange');
print_r($foods);

echo $foods['fruits'][3]."<br><br>";
echo "Multi dimensional Array";

$number=[
    [1,2,3],
    [11,22,33],
    [111,222,333],
    [1111,2222,3333,[4,5]]
];

echo $number[3][3] [1];
?>
