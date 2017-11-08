<?php

$filename = "filetodelete.php";

if (@unlink($filename)){
    echo 'file <strong>'.$filename.'</strong> has been deleted';
}else{
    echo 'file cannot be deleted';
}

?>