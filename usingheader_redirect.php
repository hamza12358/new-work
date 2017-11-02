<?php ob_start();?>
<h1>pages</h1>
this is the page
<?php

$redirect_page = 'http://google.co.uk';
$redirect = false;

if ($redirect==true){
    header('location:' . $redirect_page);
}
ob_end_flush();
?>
