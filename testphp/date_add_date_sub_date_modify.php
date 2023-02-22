<?php
$date = date_create("2015-05-15");

//adding days with the the help of date_add
date_add($date, date_interval_create_from_date_string("30 days"));
echo "date added : ". date_format($date, "d-m-Y")."<br>";
//date_sub for subtract date 
date_sub($date, date_interval_create_from_date_string("15 days"));
echo "date subtract : ".date_format($date, "d-m-Y")."<br>";

//date_modify() for 
date_modify($date, "10 days");
//with the help of date_modify adding 
echo "date adding with the help of date_modify : ".date_format($date, "d-m-Y")."<br>";

//with the help of date_modify subtract 
date_modify($date, "-10 days");
echo "date subtract with the help of date_modify  : ".date_format($date, "d-m-Y");
?>