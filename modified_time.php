<?php

$time = time();
$time_now = date('d m y@ H:i:s', $time);
$time_modified = date('d m y@ H:i:s', strtotime('+1 week 2hours 30minutes'));
echo "the now is" . $time_now . '<br>' . 'the modified time is' . $time_modified;


?>