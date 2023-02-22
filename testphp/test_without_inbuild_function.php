<?php

// (1).odd or even number
$number = 99;
$checknum =  $number % 2 == 0 ? "The entered number $number is an even number " : "The entered number $number is an odd number ";
echo $checknum;

//(2)string is a palindrom or not
$str = "shezad";
$revstr = "";
$count = strlen($str) - 1;

for ($i = $count; $i >= 0; $i--) {
    $revstr = $str[$i];
}
echo $revstr;

//(3). FIND THE LARGEST NUMBER IN ARRAY
function getmax($array)
{
    $n = count($array);
    $max = $array[0];
    for ($i = 1; $i <= $n; $i++)
        if ($max < $array[$i]) ($max = $array[$i]);
    return $max;
}
$array = array(1, 2, 3, 4, 5, 6);
echo "The largest number in array is : " . getmax($array) . "<br>";

//(4). Count the number of vowels in a string
$string1 = "ali is good boy";
$len = strlen($string1);
$num = 0;

for ($i = 0; $i < $len; $i++) {
    if ($string1[$i] == 'a' || $string1[$i] == 'e' || $string1[$i] == 'i' || $string1[$i] == 'o' || $string1[$i] == 'u') {
        $num++;
    }
}

echo "number of vowels : " . $num . "<br>";

//(5).Reverse the order of words in a string.
$string = "shezad";
$len = strlen($string);
for ($i = ($len - 1); $i >= 0; $i--) {
    echo $string[$i]."<br>";
}

// //(7)Calculate the sum of the digits of a number.
$myarrayInd = [54, 6, 23, 76];
$sumIndValue = 0;
foreach ($myarrayInd as $Indvalue) {
    $sumIndValue += $Indvalue;
}
echo "The sum of numbers in indexed array is: " . $sumIndValue;
echo "<br>";

//(8)Remove duplicates from an array.

$inputArray = array(1, 4, 2, 1, 6, 4, 9, 7, 2, 9);
$outputArray = array();

foreach($inputArray as $inputArrayItem) {
    foreach($outputArray as $outputArrayItem) {
        if($inputArrayItem == $outputArrayItem) {
            continue 2;
        }
    }
    $outputArray[] = $inputArrayItem;
}
echo "<pre>";
print_r($outputArray);
echo "</pre>";




//(9)Find the second smallest number in an array.
$array1 = array(34, 7, 2, 12, 3, 0);
if ($array1[1] > $array1[0]) {
    $v1 = $array1[0];
    $v2 = $array1[1];
} else {
    $v1 = $array1[1];
    $v2 = $array1[0];
}
for ($i = 2; $i < count($array1); $i++) {
    if (!($array1[$i] > $v2)) {
        if ($v1 > $array1[$i]) {
            $v2=$v1;
            $v1=$array1[$i];
        } else {
            $v2 = $array1[$i];
        }
    }
}
echo "The secound smallest number is : " . ($v2) . "<br>";

//(10) Check if a given string is a valid email address.

// $email = "someone@example.com"; 
// if(preg_match("/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/", $email)) { 
//   echo "Valid email address."; 
// } 
// else { 
//   echo "Invalid email address."; 
// } 


function isEmail($email) {
    if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email)) {
         return $email."this is a valid mail";
    } else {
         return "something is wrong";
    }
}
echo isEmail('email@gmail.com');