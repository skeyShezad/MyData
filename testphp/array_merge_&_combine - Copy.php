<?php

// this example for index array.
// $fruits = array('orange', 'apple', 'graps','55', 'banana');
// $veggie = array('carrot', 'pea');
// $newarray = array_merge($fruits, $veggie);
// print_r($newarray) ;

//associative array with function

// $fruits = array('a'=>'orange', 'b' =>'apple','c'=> 'graps','d'=> 'banana');
// $veggie = array('b'=>'carrot','e'=> 'pea');
// //  $newarray = array_merge($fruits, $veggie); //first method

//  $newarray = $fruits + $veggie; //using arithmethik operator for merge and in this method we can not replace the value.
//  print_r($newarray) ;
//array_merge_recursive function this function create duplicate values in a new array
// $fruits = ['a'=>'orange', 'b' =>'apple','c'=> 'graps','d'=> 'banana'];
// $veggie = ['b'=>['color' => ['red', 'blue', 'green']],
// 'e'=> 'pea',
// 55,
// 54];

// $newarray = array_merge_recursive($fruits, $veggie);

// print_r($newarray) ;


//array combine this for only index array use

$name = array("ram", "sham", 'ghan');
$age = array (32, 34, 54);
$newarray = array_combine($name, $age);
echo "<pre>";
print_r($newarray) ;
echo "</pre>";
?>