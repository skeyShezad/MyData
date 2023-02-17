<?php

 //function square($n, $m){
 //return "$n = $m"; //associative array return
 //return [$n = $m];//multidimensional associative array
// }
// $a = [1, 2, 3, 4, 5];
// $fruits = ['orange', 'apple', 'graps','55', 'banana'];

// $newarray = array_map("square", $a, $fruits); //first is function name and secound is array name
// print_r($newarray);

//create associative array to multidimensional array with upper function
function upper($s){
    return strtoupper($s);
}

$as  = ["a" => "red", "b" => "blue", "c" =>"green", "d" =>"yellow","e" =>"brown"];
$newarray = array_map("upper", $as);
print_r($newarray);


?>