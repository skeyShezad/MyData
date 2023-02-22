<?php
$date = date_create("2023-03-15 22:25:00", timezone_open("Asia/Kolkata"));
// create data and stored as date object
echo date_format($date, "d/m/Y H:i:s");  //date show for use formate_create

?>