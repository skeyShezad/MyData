<?php
//hours
echo "hour is : ". date("h"). "<br>"; //01 to 12
echo "hour is : ". date("H"). "<br>";
echo "hour is : ". date("g"). "<br>";
echo "hour is : ". date("G"). "<br>";

//minutes
echo "minutes is : ". date("i"). "<br>";

//secound
echo "secound is : ". date("s"). "<br>";

//meridiem for am and pm
echo "meridiem is : ". date("a"). "<br>"; //for small letter
echo "meridiem is : ". date("A"). "<br>"; //for capital letter

//include all hour, minute, second, meridiem
echo "time is : ". date("h:i:s:a"). "<br>";

//time and date show 
echo "time & date is : ". date("d-m-y h:i:s:a"). "<br>";// defualt time zone

// time zone change as per country
date_default_timezone_set("Asia/Kolkata");
echo "time & date is : ". date("d-m-y h:i:s:a e"). "<br>";// after set india time zone

?>