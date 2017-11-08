<?php

$filename = 'filetorename.php';
$rand = rand(10000,99999);

if (rename($filename,$rand.'php')){
    echo 'file <strong>' . $filename . '</strong>has been renamed to<strong>' . $rand . '.php</strong>';
}