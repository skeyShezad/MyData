<?php
//md5
$str = "hello";
echo "the string :". $str. "<br>";
echo "md5 Binary :". md5($str,  true)."<br>";
echo "md5 hexa :". md5($str)."<br>";

//sha1
echo "sha1 Binary :". sha1($str, true)."<br>";
echo "sha1 hexa :". sha1($str)."<br>";

//also we can perfor with if condition for password match
if(md5($str) == "5d41402abc4b2a76b9719d911017c592"){
    echo "password match";
}
?>