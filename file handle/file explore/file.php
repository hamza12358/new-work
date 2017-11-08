<?php

$filename = 'names.txt';
$handle = fopen($filename , 'r');

$datain = fread($handle,filesize($filename));

$names_arrays = explode(',',$datain);

echo $names_arrays[0];

?>