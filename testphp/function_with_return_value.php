<?php

function sum($math, $sci, $phis){

    $s = $math + $sci + $phis;
    return $s; //return is given the single return values. 
}
function percentage($st){
$final_pr = $st / 3;
echo "Your Percentage is : ". $final_pr . "%";
}

$total = sum (55, 90, 88) ;

echo "Your Score Is : ". $total ."<br>";
percentage($total);



?>