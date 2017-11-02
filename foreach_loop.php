
<?php

$food = array('Healthy'=>(array('salat','fruits','vegetables')),'Unhealhty'=>array('pizza','ice cream'));


foreach ($food as $element => $inner_array){
    echo '<strong>' . $element . '<br></strong>';
    foreach ($inner_array as $item){
        echo $item . '<br>';
    }
}


?>