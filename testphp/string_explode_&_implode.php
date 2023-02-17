<?php
//explode function  
$str = "hello world!. it's beautiful day.";
$array = explode(" ", $str, 3);  
echo "<pre>";
print_r($array);  
echo "</pre>";

// foreach(explode(" ",$str) as $newarray){
// echo $newarray. "<br>";
// }
// implode function
$implode = array('hello','world!', 'beautiful', 'day!' );
$newarray1 = implode("-", $implode); // also we can use html tag inside imlode
echo $newarray1;
?>