<?php
session_start(); // now we show the session in other page
echo "<pre>";
//print_r($_SESSION);// session create other page and show in other page
echo "</pre>";

if(isset($_SESSION["favcolor"])){
    echo "favourite color is : ".$_SESSION["favcolor"]; 
}
// echo "favourite color is : ".$_SESSION["favcolor"];
?>