<?php
//array key use for main in associative array
$color = [
    "first" => "red",
    "secound"=> "blue",
    "third" => "green",
    "forth" => "light"
];


// $newArray = array_keys($color); //array_key
// $newArray = array_key_first($color); //array_key_first
// $newArray = array_key_exists("t",$color); //array_key_exist this return the 0 and 1 form there 
// print_r($newArray);

$newArray = key_exists("secound",$color); // same job as array_key_exists
if($newArray){
echo "key exists";
}else{
    echo "not exist";
};







?>