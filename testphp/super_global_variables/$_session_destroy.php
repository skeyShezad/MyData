<?php
session_start();
session_unset(); //this function delete all the variable values.
// now we distroy the session
session_destroy();
echo "session is destroy.";
?>