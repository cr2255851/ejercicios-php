<?php
function foo ($var_1, &$var_2){
    $var_1 = strtoupper($var_1);
    $var_2 = strtoupper($var_2);
}
$var_1="caracas";
$var_2="valencia";

foo($var_1, $var_2);
    
echo $var_1 . "<br>";
echo $var_2;

$var_2="colombia";
echo $var_2;

$var_2 ="paris";
echo $var_2;
?>