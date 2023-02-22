<?php
echo checkdate(02, 02, 2014)."<br>"; // for valid date or not
$date1 = date_create("2013-03-15");
$date2 = date_create("2013-12-12");
$diff =date_diff($date1, $date2);
//print object inside values for using arrow operator
echo $diff -> days;
echo "<pre>";
print_r($diff);
echo "</pre>";
?>