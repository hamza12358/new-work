<?php

$handle = fopen('names.txt' , 'w');
fwrite($handle , 'alex'."\n");
fwrite($handle , 'billy');

fclose($handle);

echo 'written'

?>