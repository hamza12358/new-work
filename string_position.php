<?php
$offset = 0;
$find = "is";
$find_length=strlen($find);

$string = "My name is hamza so is he going to school is";

while ($string_positon  = strpos($string, $find, $offset)){
    echo '<strong>' . $find . '</strong> found at ' . $string_positon . '<br>';
    $offset = $string_positon = $find_length;
}
?>