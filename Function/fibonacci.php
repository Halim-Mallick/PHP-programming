<?php
function fibonacci($old,$new,$end){
    static $start;
    $start=$start ?? 1;
    if($start>$end){
        return;
    }
    $start++;
    echo $old." ";

    $temp=$old+$new;
    $old=$new;
    $new=$temp;

    fibonacci($old,$new,$end);
}

fibonacci(0,1,5);

?>
