<?php

$str = "hello i am 'shezad'"; // inside '' code some hacker use sql injection and hack data so use 
// addslashesh we can secuqre
// $str1 = "Count the number of vowels in a string";
echo $str . "<br>";
echo addslashes($str)."<br>"; // add slashesh for store in database
$new = $str."<br>";
echo stripslashes($new)."<br>"; //we use for giving user input 
//with the help of addslashesh we can target multiple character for slash
$newcharacter =  addcslashes($str, "s")."<br>";
$newcharacter =  addcslashes($str, "a..g")."<br>";
echo $newcharacter;

//and remove the slashesh with the help of stripcslashes
echo stripcslashes($str);

?>