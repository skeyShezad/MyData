<?php

// (1).odd or even number 
$number =99; 
if($number%2==0){
echo "number is even"."<br>";
}else{
    echo "number is odd"."<br>";
}

$checkNum = $number % 2 == 0  ? "The entered number $number is an even number " : "The entered number $number is an odd number " ;
echo $checkNum. "<br>";
//(2)string is a palindrom or not 

function palindrom_or_not($string){
    if($string == strrev($string))
    echo "it's palindrom string<br>";
    else {
        echo "it's not palindrom string <br>";
    };

}
echo palindrom_or_not('shezad');



//(3). FIND THE LARGEST NUMBER IN ARRAY

$larnum = [23, 43, 1, 67,-50];
echo "Max number is : ".max($larnum)."<br>";



//(4). Count the number of vowels in a string
$string1 = "ali is good boy";
$vovel = array ('a', 'e', 'i', 'o', 'u');
$len = strlen($string1);
$num = 0;

for($i = 0; $i < $len; $i++){
    if(in_array($string1[$i], $vovel)){
        $num++;
    }
    // echo "num <br>";
    
}
// function countDigits( $string1 ){
//     return preg_match_all("/[0-9]/",$string1);
// }
// substr_count($string1, ' ');
echo "number of vowels : ". $num. "<br>";






//(5).Reverse the order of words in a string.

$str = "hello friends!";
echo "string reverse is : ".strrev($str)."<br>";



//(6).Check if a given number is prime.
//issue for break.
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

echo isprime(8);




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


 $arr1 = [34, 7, 2, 12, 3, 0];
 sort($arr1);
 echo "secound small number is : ". $arr1[1]. "<br>";
  


//(10) Check if a given string is a valid email address

$email = "shezadluhar@gmail.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
echo ("$email is a valid email");
}else{
    echo ("$email is not a  valid email");
}


?>


