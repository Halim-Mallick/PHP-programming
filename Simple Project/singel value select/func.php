<?php
function displayOption($options){
    foreach($options as $option){
        printf("<option value='%s'>%s</option>",strtolower($option),
        ucwords($option));
    }
}
?>
