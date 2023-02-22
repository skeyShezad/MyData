<?php
$coocie_name = "user";
$cookie_value = "shezad luhar";

setcookie($coocie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
    <body>
    <?php
    //check cookie is work or not
    if(!isset($_COOKIE[$coocie_name])){
    echo "Cookie is not set"; // cookie is not seet so message pop-up
    }else{
        echo $_COOKIE[$coocie_name];
    }
    ?>
    </body>   

</html>