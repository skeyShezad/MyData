<?php


// $fruits = array('orange', 'apple', 'graps','55', 'banana');

// echo in_array('graps', $fruits);  //in_array there is a two parameters so first is what you find and secound which variable.
// // so in output there is given 1 so array exist or 0 is not exist.

// //let's find with the help of if statement
// if(in_array('apple', $fruits)){
//     echo "success fully find";
// }else{
//     echo "not find";
// }

// // if we can find strickt value so we can use true.

// if(in_array(55, $fruits, true)){
//     echo "success fully find";
// }else{
//     echo "not find";
// }

// //use multidimensional array to find

// $a = array(array('a','h'), array("p","r"));

// if(in_array(array('a','h'), $a, true)){
// echo "successfully find";

// }
// else{
//     echo "not find";
// };


// array_search
$fruits = array('orange', 'apple', 'graps','55', 'banana');

echo array_search('apple', $fruits);  //in array_search given the index position 

// associative array find.

$fruits = array('a' => 'orange','b'=> 'apple','c'=> 'graps','d'=>'55','e'=> 'banana');

echo array_search('apple', $fruits);
?>