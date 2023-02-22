<?php
echo "cookie value is :".$_COOKIE["user"];
setcookie("user", "", time() - (86400 * 30), "/");//delete cookie

?>