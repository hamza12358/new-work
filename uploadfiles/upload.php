<?php
$name = $_FILES['file']['name'];
/*$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
*/
$tmp_name = $_FILES['file']['tmp_name'];


if (isset($name)){
    if (!empty($name)){

        $location = 'uploads/';

        if (move_uploaded_file($tmp_name , $location.$name)) {
            echo 'uploaded!';
        }

    }else{
        echo 'please choose a file';
    }
}

?>



<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <input type="submit" name="submit">
</form>
