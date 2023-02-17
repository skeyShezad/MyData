<?php

//first condition is deleted values in array position 

// $color = ["red", "blue", "green", "yellow", "brown"];

// $newarray = array_splice($color, -2,1);

// print_r($color);

//now remove some value in first array and and add values from  the secound array

$color = ["red", "blue", "green", "yellow", "brown"];
$fruits = ["orange", "apple"];

// array_splice($color,0,2,$fruits);
array_splice($color,count($color),0, $fruits); //also we can use count function foradded in the last position
print_r($color);
?>