<?php
$olddate = mktime(0, 0, 0, 03, 15, 2015);// we can create old date
$date = getdate($olddate);
echo $date['month']. "-". $date['year'];

echo"<pre>";
print_r(getdate());
echo"</pre>";


//gettimeofday() : current second,micro-second,  minutes return

echo"<pre>";
print_r(gettimeofday());
echo"</pre>";
$gettimeprint = gettimeofday();
echo $gettimeprint ['minuteswest']; // perticular key print
echo gettimeofday(true);

//local time give thte local server current time
echo"<pre>";
print_r(localtime(time(), true));
echo"</pre>";
?>