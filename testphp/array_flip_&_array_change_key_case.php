<?php
$a = array(
"bill" => 10,
"dill" => "shezad",
"chill" => 30,
);

$newarray = array_flip($a); //intersection the values  and keys
$newarray = array_change_key_case($a, CASE_UPPER);  //convert the keys into the upper case default is lower case
print_r($newarray);



?>