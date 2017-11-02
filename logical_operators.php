<!--AND operators-->
<?php

$number = 30;

$num1 = 10;
$num2 = 40;

if ($num1<=$number&&$num2>=$number){
    echo 'ok';
}else{
    echo 'not ok';
}
?>
<br>
<!--OR operators-->
<?php

$number = 30;

$num1 = 50;
$num2 = 40;

if ($num1<=$number||$num2>=$number){
    echo 'ok';
}else{
    echo 'not ok';
}
?>
<br>
<!--NOT operators-->
<?php

$number = 50;

$num1 = 50;
$num2 = 40;

if(!($num1<=$number)||!($num2>=$number)){
    echo 'ok';
}else{
    echo 'not ok';
}
?>