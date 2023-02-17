<?php
// str_pad for reserve some space for special character like ".", "$" or sign
$str = "hello world";
echo "normal str_pad = ".str_pad($str, 20, ".")."<br>";
echo "STR_PAD_LEFT with str_pad = ".str_pad($str, 20, ".", STR_PAD_LEFT)."<br>";// right is a by default
echo "STR_PAD_BOTH with str_pad = ".str_pad($str, 20, ".", STR_PAD_BOTH)."<br>";
// str_repeat for repeat some word as you define 

$str1 = "wow"; 
echo "str_repeat = ".str_repeat($str1, 3);

?>