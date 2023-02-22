<?php
$str = "hello world";
$encodestring = convert_uuencode($str)."<br>"; // increapt message
echo "encode string :".$encodestring;
$decodestring = convert_uudecode($encodestring)."<br>"; // decrept message
echo "decode string :".$decodestring;

?>