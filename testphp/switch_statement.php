<?php
// $weekday = 2;

// switch ($weekday) {

// case 1:
//     echo "today is monday";
//     break;

// case 2:
//     echo "today is tuesday";
//     break;
// case 3:
//     echo "today is wednesday";
//     break;
// case 4:
//     echo "today is thusday";
//     break;
// case 5:
//     echo "today is friday";
//     break;
// case 6:
//     echo "today is saturday";
//     break;
// case 7:
//     echo "today is sunday";
//     break;

// default:
//     echo "pleaase enter the correct week day";
// }


// in switch statemem use conditional statement 
$age = 15;

switch (true) {

    case ($age >= 15 && $age <= 20):
        echo "you are eligible";
        break;

    case ($age >= 21 && $age <= 30):
        echo "you are not eligible";
        break;

    default:
        echo "enter the valid age";
        break;
}
