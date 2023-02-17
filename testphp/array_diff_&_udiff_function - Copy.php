<?php
function compare($a, $b){
    if($a === $b){
    return 0;}
        return ($a > $b) ? 1 : -1;
};

$a1  = ["a" => "red", "b" => "blue", "c" =>"green", "d" =>"yellow","e" =>"brown"];
$a2 = ["a" => "red", "f" => "green", "d" => "purple"];

$newarray =array_diff($a1, $a2); // stored diffrent values in newarray
$newarray =array_diff_key($a1, $a2); //diffrent in key and stored in newarray
$newarray =array_diff_assoc($a1, $a2); //diffrent in key also values in array and stored in newarray.
//note all diff. function are case sensitive
$newarray =array_diff_uassoc($a1, $a2, "compare"); //this uassoc function is user define diffrent in assosiative array.
//array_udiff = array_diff in this u is user define
//array_diff_ukey = array_diff_key 

print_r($newarray);

?>