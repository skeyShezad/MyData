<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>

<body>
    <form action="testform.php" method="get"> <!--transfer the data into the testform.php -->
        Name : <input type="text" name="fname"><br><br>
        Age : <input type="text" name="age"><br><br>
        <!-- Password : <input type="password" name= "password"><br><br> -->
        <input type="submit" name="save"><br><br>
    <!-- also we can use post method  -->
    <!-- in REQUEST method we use POST ALSO GET mthod-->
   
    </form>
</body>

</html>