<?php

//single value find
// $fruits = array('orange', 'apple', 'graps','55', 'banana');
// $newarray = array_rand($fruits);
// echo "<pre>";
// print_r($newarray,);
// echo "</pre>";
// echo $fruits[$newarray];

// //also we can generate multiple values with the help of multidimensional array
// $fruits = array('orange', 'apple', 'graps','55', 'banana');
// $newarray = array_rand($fruits, 2);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// // echo $fruits[$newarray[0]]. "<br>";
// // echo $fruits[$newarray[1]]."<br>";
// // also we can performed associative array with shuffle.
// $color = ['a' => 'red', 'b'=> 'green', '42'=> 'blue', 'd'=> 'yellow']; 
// $newarray = array_rand($color, 2);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";



//shuffle 
$fruits = array('orange', 'apple', 'graps','55', 'banana');
shuffle($fruits); // THIS function is position will be change in array.
print_r($fruits);// existing array change not create new array.


?>