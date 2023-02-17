<?php
$color = array(
    "a" => "red",
    "b"=> "blue",  //this is a associative array
    "c" => "red",
    "d" => "light"
);

//$newarray = array_values($color); // given the index array 
$newarray = array_unique($color); // given the unique values in array
print_r($newarray);

?>