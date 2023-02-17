<?php
$str1 = "hello world1. the world2 is so beautiful";

// for search world with the use of srstr()  
echo "strstr : ".strstr($str1, "world")."<br>"; // search and print the right side string this function is case sensitive
echo "stristr : ".stristr($str1, "World")."<br>"; // search and print the right side string this function is case insensitive
echo "strchr same as strstr : ".strchr($str1, "world")."<br>";
echo "strrchr for reverse string check : ".strrchr($str1, "world")."<br>";
echo strpbrk($str1, "wo"); // find for character find 


?>