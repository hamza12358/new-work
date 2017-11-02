<?php

$string =  "This is a string.";

if (preg_match('/string/',$string)){
    echo 'Match';
}else{
    echo 'Notmatch';
}

?>
<br>

<?php
function has_space($string){
    if (preg_match('/ /',$string)){
        return 'true';
    }else{
        return 'false';
    }
}
$string =  "This is a string.";

if (has_space($string)){
    echo 'has spaces';
}else{
    echo 'has no spaces';
}

?>
<br>

