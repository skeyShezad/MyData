<?php
$per = 120;

if($per >= 80 && $per <= 100){
echo "you are in merit";
}
elseif($per >= 60 && $per <= 80){
    echo "you are in Ist division";
    }
    elseif($per >= 45 && $per <= 60){
        echo "you are in IInd division";
        }
        elseif($per >= 33 && $per <= 45){
            echo "you are in IIIrd division";
            }
            elseif($per < 33){
                echo "you are fail";
            }

            else{
                echo "please enter the correct values";
            }


?>