<?php
//date
echo "today is 'd' : ". date("d"). "<br>";// 01,02.
echo "today is 'j': ". date("jS"). "<br>";//1,2.
echo "today is 'z' for starting to now which day: ". date("z"). "<br>";
echo "now week is 'W' calculate to start to now : ". date("W"). "<br>";
echo " present month in a day count 't' : ". date("t"). "<br>";
echo " leep year or not for use 'L' : ". date("L"). "<br>";// 1 means this year is leap year and 0 means not.
//month
echo "month is 'F' full month name : ". date("F"). "<br>";// F for full month name
echo "month show in numeric for 'm'  : ". date("m"). "<br>";
echo "month show in numeric for 'n'  : ". date("n"). "<br>";// n but not contain before 0
echo "month first 3 letter show for 'M'  : ". date("M"). "<br>";

//year
echo "yeat show in 'Y' for 4 num show    : ". date("Y"). "<br>";
echo "yeat show in 'y' for 2 num show : ". date("y"). "<br>";

//full date passing

echo "full date is : ".date("d/m/Y")."<br>";
echo "full date is : ".date("Y-M-d")."<br>";

//week
echo "week day is 'D' for 3 letter : ".date("D")."<br>"; // 
echo "week day is 'l' for full day name : ".date("l")."<br>";
echo "week day is 'N' for number show in a week day : ".date("N")."<br>";// starting is monday  1 and end is 7 means sun.
echo "week day is 'w' for number show in a week day : ".date("w")."<br>";// startinf is sunday 0 and end is 6 means sat.

?>