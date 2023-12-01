<?php
function IsChecked($inputName,$value){
    if(isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value,$_REQUEST[$inputName]) )
    echo "Checked" ;

}
//Another Technic
function IsFruitCheck($value){
    if(isset($_REQUEST['fruits']) && is_array($_REQUEST['fruits']) && in_array($value,$_REQUEST
    ['fruits'])){
        echo " Checked ";
    }
}
?>
