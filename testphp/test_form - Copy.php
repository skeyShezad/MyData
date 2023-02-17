<?php

// (1).odd or even number 
$number =10; 
if($number%2==0){
echo "number is even"."<br>";
}else{
    echo "number is odd"."<br>";
}

//(2)string is a palindrom or not 







//(3). FIND THE LARGEST NUMBER IN ARRAY

$larnum = [23, 43, 1, 67];
echo "Max number is : ".max($larnum)."<br>";



//(4). Count the number of vowels in a string








//(5).Reverse the order of words in a string.

$str = "hello friends!";
echo "string reverse is : ".strrev($str)."<br>";



//(6).Check if a given number is prime.

function isprime($prime){
for($i = 2; $i < $prime; $i++){
if($prime % $i == 0){
    echo "not prime"."<br>";
 break;  
}
else{
    echo "prime number"."<br>";
    break;
}
}
}

isprime(8);




//(7)Calculate the sum of the digits of a number.
$sum = [54, 6, 23, 76];
echo "sum of number is : ".array_sum($sum)."<br>";



//(8)Remove duplicates from an array.
$a1  = ["a" => "red", "b" => "blue", "c" =>"green", "d" =>"yellow","e" =>"brown", "f"=> "red", "g"=> "blue"];

$newarray =array_unique($a1); //not contain same values and  key also values in array and stored in newarray.
echo "<pre>";
print_r($newarray);
echo "<pre>";


//(9)Find the second smallest number in an array.

$a = array(22, 34, 1,  56, 67);
$newarray = rsort($a);
print_r($newarray);
// (sort(arr, arr+n))
//echo "next : ". next($a). "<br>";





?>


