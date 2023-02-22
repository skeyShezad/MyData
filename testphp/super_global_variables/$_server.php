<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']   ?>" method="post">
        <!-- PHP_SELF means user submit the button so output show in this page-->

        Name : <input type="text" name="fname"><br><br>
        Age : <input type="text" name="age"><br><br>
        <input type="submit" name="submite"><br><br>
    </form>

    <?php
    if(isset($_POST['submite'])){ //isset means that time action so run this 
        echo  $_POST['fname'] . "<br>";
        echo  $_POST['age'] . "<br>";
    }
    
    
    ?>
</body>

</html>