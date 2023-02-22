<?php
$str =bin2hex("hello world hello");

echo "binary to hexadecimal :".$str."<br>";

$hex2binary =hex2bin($str);
echo "hexa to binary :". $hex2binary;
?>