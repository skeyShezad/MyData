<?php
echo "time & date is : ". date("d-m-y h:i:s:a"). "<br>";
echo date("d-m-Y h:i:s:a", mktime(0,0,0, 10, 02, 2003))."<br>";
echo date("d-m-Y h:i:s:a", gmmktime(0,0,0, 10, 02, 2003)); // uropen time show
?>