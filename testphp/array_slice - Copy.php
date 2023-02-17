<?php

//array_slice for index array
$color = ["red", "blue", "green", "yellow", "brown"]; 
$newarray = array_slice($color, 1, 2);
$newarray = array_slice($color, -1, 2, true); //also we can chose the last value in array for (-)
//and true for actual position of array
print_r($newarray);  

//array_slice in associative array
$color = ['a' => 'red', 'b'=> 'green', '42'=> 'blue', 'd'=> 'yellow'];

$newarray = array_slice($color, 1, 3, true);
print_r($newarray);

?>