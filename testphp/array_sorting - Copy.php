<?php
// $color = ["red", "blue", "green", "yellow", "brown"];

// sort($color); //sorting in ascending order
// //rsort($color);  // reverse shorting
// print_r($color);

// //also we can perfor for numerik values in array
$a = array(22, 34,  56, 67);
$newarray = sort($a);
// rsort($color);
print_r($newarray);

//associative array with sort array method

// $food = array("d" => "lemon", "r" => "orange", "b" => "banana", "c"=> "apple");

// // sort($food);
// asort($food); //asort means associative sort in this asort given key also in array.
// arsort($food); // arsort for associative reverse sort
// print_r($food);

//key sorting method ksort() & kesort() 

// $food = array("d" => "lemon", "r" => "orange", "b" => "banana", "c"=> "apple");

// ksort($food); //key sorting for ascending order
// krsort($food); //key revese for descending order
// print_r($food);

// natsort for natural order sort 
// $array1 = array("img12.png", "Img45.png", "Img2.png", "Img1.png");
// // natsort($array1);
// natcasesort($array1);
// print_r($array1);

// array_multisort (): for two array sort
// $color = array('red', 'blue', 'green');
// $veggie =array ('yellow', 'brown', 'berry');
// array_multisort($color, $veggie);
// print_r($color);
// print_r($veggie);

//array reverse create new array in reverse order all types of array like index, associative, multidiemensional array
// $color = array('red', 'blue', 'green','yellow', 'brown', 'berry');
// $newarray = array_reverse($color);
//  print_r($newarray);

?>