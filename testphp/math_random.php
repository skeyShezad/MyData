<?php
//rand() function
echo "random number is : ".rand()."<br>";
echo "random number for 0 to 10 : ".rand(0, 10)."<br>";

//new version mt_rand() function 
echo "new version mt_rand() number is : ".rand()."<br>";
echo "new version mt_rand() random number for 0 to 10 : ".rand(0, 10)."<br>";

// lcg_value() for 0 to 1 under ramdom number given.
echo " lcg_value() for 0 to 1 under ramdom number given : ".lcg_value()."<br>";
$lcg = lcg_value();
echo "random number is : ".round($lcg * 100); //random number generate 
?>