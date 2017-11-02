<?php

$string = "my name is hamza.hamza is a good boy";
$string_new =str_replace('is','',$string);

 echo $string_new;
 ?>
<br>
<?php
$find = array('my','is','hamza');
$string = "my name is hamza.hamza is a good boy";
$string_new =str_replace($find,'',$string);

echo $string_new;
?>
