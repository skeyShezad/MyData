<?php
//str_split
$str = "shezad";
$array = str_split($str, 2); // also consider space 
echo "<pre>";
print_r($array);
echo "</pre>";
//chunk_split

$str1 = "hello my dear friends!";
$newarray = chunk_split($str1, 3, "...");

echo "<pre>";
print_r($newarray);
echo "</pre>";
?>