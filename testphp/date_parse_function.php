<?php
echo "<pre>";
print_r(date_parse("2015-03-15 12:30:25.5"));
echo "</pre>";

//also we can print perticular date something
$date = date_parse("2015-03-15 12:30:25.5");
echo $date["day"];

//date_parse_from_format same date_perse but diffrent is 
//date_parse_from_format second parameter is format
echo "<pre>";
print_r(date_parse_from_format("d.n.Y", "15032015"));
echo "</pre>";

?>