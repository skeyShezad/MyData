<?php
//array_walk function for call the function for every array values

$veggie = array( "1"=> "carrot", "2"=> "tomato");
$fruits = array(
    $veggie,
"a"=> "orange",
"b"=> "apple",
"c"=> "evee",
"d"=> "banana"
);

// array_walk($fruits, "myfunction", "is a key of");

// function myfunction($value, $key, $parameter){
// echo "$key $parameter $value <br>";

// }

// use array_walk_recursive function for create multidimensional array.
// in this function we print (combine) two array in a one array
array_walk_recursive($fruits, "myfunction", "is a key of");

function myfunction($value, $key, $parameter){
echo "$key $parameter $value <br>";

}

?>