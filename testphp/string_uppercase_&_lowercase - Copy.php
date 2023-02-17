<?php

$str = "Shezad Luhar";

$newstr = strtolower($str); // upper to lower case convert
$newstr1 = strtoupper($str);
$newstr2 = lcfirst($str); // lower case first convert first character in lower case
$newstr3 = ucfirst($str); // upper case first convert first character in lower case
$newstr4 = ucwords($str);// every word first letter convert upper case

echo "<pre>";
print_r($newstr);
echo "</pre>";
echo "<pre>";
print_r($newstr1);
echo "</pre>";
echo "<pre>";
print_r($newstr2);
echo "</pre>";
echo "<pre>";
print_r($newstr3);
echo "</pre>";
print_r($newstr4);
echo "</pre>";


?>