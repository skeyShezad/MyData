<?php
if(isset($_FILES['image'])){
    echo "<pre>";// print the information
    print_r($_FILES);
    echo "</pre>";
// now upload in a server.
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];

//function for  move_upload_file this function client side image stored into server-side
if(move_uploaded_file($file_tmp, "upload_file/". $file_name)){
    echo "successfully uploaded";
}else{
    echo "could not uploaded";
}
}

?>
<html>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- enctype for multiple property use like post or -->
        <input type="file" name="image"><br><br>
        <input type="submit">
    </form>


</body>

</html>