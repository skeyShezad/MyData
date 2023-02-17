<?php

$str1 = "hello world. the world is so beautiful";
//strpos()
echo "strpos : ".strpos($str1, "world")."<br>"; // given the positon of string will be started.
echo "strpos with third parameter : ".strpos($str1, "world", 10)."<br>"; // also we can given the start position in this 
//strrpos() string position reverse means find the reverse position in string 
echo "str reverse pos :". strrpos($str1, "world")."<br>";
// note strpos() & strrpos() both are case sensitive

//stripos()
echo "str reverse pos :". stripos($str1, "World")."<br>"; // string case insensitive position
//strripos()
echo "str reverse case-insensitive pos :". strripos($str1, "World")."<br>"; //string reverse case-insensitive position
?>