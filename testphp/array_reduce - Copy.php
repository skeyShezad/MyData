<?php
function str($n, $m){ // n is a carry and m is a arrays values pass
    return $n . "-". $m;

}

// $a = ['orange', 'banana', 'apple'];
$a = [1, 2, 3, 4, 5];

$newarray = array_reduce($a, 'str', 0); // this function attached in a single string values 
print_r($newarray);
?>