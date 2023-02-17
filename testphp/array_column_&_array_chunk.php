<?php

//in array_column is use for multidimensional array we can select common column and create new array from multidiemensional array
// $array = array( //this is a multidemensional array

// array(
// 'id' => 2201,
// 'first_name' => 'anil',
// 'last_name' => 'kapoor',
// ),
// array(
// 'id' => 2202,
// 'first_name' => 'anikh',
// 'last_name' => 'jain',

// ),

// array('id' => 2203,
// 'first_name' => 'yassir',
// 'last_name' => 'khokhar',
// ),

// );

// // $newarray = array_column($array, 'first_name');  //some column values given in index array

// $newarray = array_column($array, 'first_name', 'id'); //also we can create associative array 
// print_r($newarray);



// array_chunk function 

$cars = array("volvo", "BMW", "GT", "honda", "Mercedes", "tesla");

$newarray =array_chunk($cars, 3);// this function is index array to multidmensional array convert

print_r($newarray);

//associative array to multidimensional array with the help of array_chunk

$age = array ("moan" => 23,
                "rohan" => 34,
                "dohan" => 45,
                "hanan" => 25           
);
$newarray =array_chunk($age, 2, true); //ture mean preserve value they given also their keys
print_r($newarray);











?>