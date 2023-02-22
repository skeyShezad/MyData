<?php
// date 
echo date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get()."<br>";
// same work as timezone

$tz = timezone_open("Asia/Kolkata");
echo timezone_name_get($tz). "<br>";

//location check functions.
echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";
// timezone_identifiers_list() provide the list of timezone in array
echo "<pre>";
print_r(timezone_identifiers_list(2));
echo "</pre>";
//perticulat list print


?>