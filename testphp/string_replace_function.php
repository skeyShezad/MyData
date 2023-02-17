<?php
// string replace function is replace the existing word into the secound array
// str_replace
$str1 = "hello world. the world is so beautiful";
$find = ["hello", "world"];
$replace = ["hi", "earth"];
echo str_replace("world", "earth", $str1). "<br>"; //find word and replace this 
echo str_replace($find, $replace, $str1). "<br>"; //mutiple values replace with the help of index array
// str_ireplace for case insensitive.
$str1 = "hello world. the world is so beautiful";
$find = ["Hello", "World"]; // case insensitive
$replace = ["hi", "earth"];
echo str_ireplace("world", "earth", $str1). "<br>";

// also we can use in array and replace the color 
$color = array(
    "a" => "red",
    "b"=> "blue",  //this is a associative array
    "c" => "red",
    "d" => "light"
);
echo "<pre>";
print_r( str_replace("blue", "green", $color));
echo "</pre>";

//sunstr_replace for inside a string for brake the word and replace 
echo substr_replace($str1, "earth", 6, 16). "<br>";


// strtr for replace the character and word

echo strtr($str1, "eo", "ia"). "<br>";

//alse we can use with array
$array = ["hello" => "hi", "world" => "earch"];
echo strtr($str1, $array);

?>