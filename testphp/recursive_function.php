<?php

// function display($number){
// if($number <= 5){
// echo "$number<br>";
// // display($number + 1);
// // display(1+ $number++);also we can add increament operator use.
// }
// }
// display(1);

function factorial($n){
if($n == 0){
    return 1;

}else{
return ($n * factorial($n -1));
}   
}
echo factorial(5);



?>