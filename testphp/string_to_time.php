<?php
// string to time functions

echo date("d-m-Y",strtotime("3 mar 2005")). "<br>";
echo date("d-m-Y H:m",strtotime("+5 hours")). "<br>";
echo date("d-m-Y H:m",strtotime("+1 week")). "<br>";
echo date("d-m-Y H:m",strtotime("next Monday")). "<br>";
echo date("d-m-Y H:m",strtotime("last sunday")). "<br>";
echo date("d-m-Y H:m",strtotime("first day of last month")). "<br>";

//strftime depricated.


?>