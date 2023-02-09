<?php
// without global 
function test(){
    $x = 10;
 echo "you can access inside ". $x;    

}
test();
echo "in a outside the functoin you can not accessible : ". $x;

// with the help of globle keyword we can accessible your variable outside the function in our programm.
$a = 10;
$b = 10;
function access(){
global $a, $b,$z;  //now we can access your variable outside the function
$z = $a + $b;

}

access();
echo $z;
?>