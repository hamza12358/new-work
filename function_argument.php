<?php

$inumber1 = 10;
$inumber2 = 20;

function add($number1,$number2){
    echo $number1 + $number2;
}
 add ($inumber1 , $inumber2);

?>
<br>
<?php

$num1 = 10;
$num2 = 20;

function subtract ($number1,$number2){
    echo $number1 - $number2;
}
subtract($num1,$num2);

?>
<br>
<?php

function displayDate($day,$date,$year){
    echo $day . ' ' . $date . ' ' .$year;
}
displayDate('monday',31,2017);

?>
