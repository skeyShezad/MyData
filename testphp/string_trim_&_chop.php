<?php
$str = "hello world";
echo $str. "<br>";
echo "trim :".trim($str, "hdl")."<br>"; // trim for first and last position from word.
echo "right trim : ".rtrim($str, "hd")."<br>";// rtrim for right side trim 
echo "left trim :".ltrim($str, "hd")."<br>";// rtrim for left side trim 
// trim basic use in form beacause user give blank space to remove with the help of trim

//chop same job as rtrim only right side trim
echo "use chop : ".chop($str, "hd")."<br>";// chop for right side trim 
?>