<?php
function wow($name){
    echo "hello $name";

};

$func = "wow";  // define func variable declare func as wow convert and after convert the function then call func() variable.
$func("shezd <br>"); //also we can pass the argument in a variable function

function mul($a, $b){
    $z = $a * $b;
    echo $z;
}

$z = "mul";
$z(4, 5);

?>