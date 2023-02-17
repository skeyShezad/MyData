<?php
$color = array('red', 'blue', 'green'); //
$color = array(43, 45, 65);// also we can perfor numeric values 
list($a, $b, $c) = $color;
echo "value of a : $a <br>";
echo "value of b : $b <br>";
echo "value of c : $c <br>";

// list function perform in associative array
$color1 = array(0 => 'red', 1=> 'blue', 2=> 'green');
list($e, $f, $g)= $color1;
echo "value of e : $e <br>";
echo "value of f : $f <br>";
echo "value of g : $g <br>";
//note : with the help of list we can create new array from existing array

?>