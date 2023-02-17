<?php
//strlen for count the character
$str = "shezad luhar";
echo strlen($str)."<br>"; //count the length of string values
// str_word_count for word count
echo str_word_count($str). "<br>"; //give the number of word count. 
$newarray = str_word_count($str, 1);//secound parameter is 0 is count the word 1 is count word and given the index array 
echo "<pre>";
print_r($newarray);
echo "</pre>";
$newarray = str_word_count($str, 2); //we can define 2 so their give the keys as they position start.
echo "<pre>";
print_r($newarray);
echo "</pre>";

//substr_count for search word in string 

$str1 = "hello world. the world is so beautiful";
echo substr_count($str1, "world")."<br>"; //substr_count the word in string given 
echo substr_count($str1, "world", 10, 15); // third parameter for give starting  position
// forth position for range for last position. 
?>