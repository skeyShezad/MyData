<?php

$newarray = range(1, 100, 10);  // three parameters start, end, range of you want array
echo "<pre>";
print_r($newarray);
echo "</pre>";
$newarray1 = range('a','h');
echo "<pre>";
print_r($newarray1);
echo "</pre>";

//also we can use foreach loop in range and print tha values
foreach(range('a', 'h') as $string){
    echo $string . "<br>";
}

?>