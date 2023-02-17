<?php
// $a = "banana";
// $as  = ["a" => "red", "b" => "blue", "c" =>"green", "d" =>"yellow","e" =>"brown"];
// extract($as, EXTR_PREFIX_SAME, "test"); //extract function convert array key into the variables. 
// echo "value of a : $a <br>"; //now EXTR_SKIP override the key inside the array and give the outside the $a value
// echo "value of a : $test_a <br>";
// echo "value of b : $b <br>";
// echo "value of c : $c <br>";
// echo "value of d : $d <br>";
// echo "value of e : $e <br>";

//compact 
$firstname = "shezad";
$lastname = "luhar";
$age = 21;
$gender = "male";
$country = "india";

$extra = ["gender", "country"]; // also we can add other array with associative array.

$newarray = compact("firstname", "lastname", "age", $extra); //no dollar sign beacause compact function give the associative funtion
print_r($newarray);


?>