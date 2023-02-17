<?php

$color = array('red', 'blue', 'green','yellow', 'brown', 'berry');

echo "current : ".current($color). "<br>"; //current positoin show in array point is red.
echo "key : ". key($color). "<br>";
echo "position : ". pos($color). "<br>";// same behaviour like current 
echo "next : ". next($color). "<br>"; //move current to next position
echo "previous : ".prev($color)."<br>"; // for previous position.
echo "end : ".end($color)."<br>"; // pointer move to the last position.
echo "key : ". key($color). "<br>"; // now pointer show value which position 
//print_r(each($color)); // show values and key then create new array but now this function replicated
echo "reset : ". reset($color)."<br>"; // reset function reset the pointer in first position
?>