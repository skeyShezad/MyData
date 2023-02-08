<?php
function first($num){
$num =+ 5;
}
function secound(&$num){
$num =+ 7;  
}

$number = 10;

first($number);
echo "The Original first value is :  $number<br> /n";        //value does not change
secound($number);
echo "The Original secound added value is :  $number<br>";  //value change


?>