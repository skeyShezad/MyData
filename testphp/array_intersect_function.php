<?php
function compare ($a, $b){
if($a === $b){
    return 0;
}
return ($a > $b) ? 1 : -1;
}


$a1  = ["a" => "red", "b" => "blue", "c" =>"green", "d" =>"yellow","e" =>"brown"];
$a2 = ["a" => "red", "f" => "green", "d" => "purple"];

$newArray =array_intersect($a1, $a2); //this function given both array values are same 
$newArray =array_intersect_key($a1, $a2);  //this function match the key from both tables 
$newArray =array_intersect_assoc($a1, $a2); //this function match array values also key for both tables and assoc means associative
$newArray =array_intersect_uassoc($a1, $a2, "compare"); // u means user define means user create your own function for compare

print_r($newArray);
?>