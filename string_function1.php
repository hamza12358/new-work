<?php

$string = 'This is an example of string .';
$string_word_count =str_word_count($string,0 );

echo $string_word_count;
?>
<br>

<?php

$string = 'This is an example of string .';
$string_word_count =str_word_count($string,1);

print_r( $string_word_count);
?>

<br>
<?php

$string = 'This is an example of string .';
$string_word_count =str_word_count($string,2);

print_r( $string_word_count);
?>
<br>
<?php

$string = 'This is an example of string .';
$string_shuffled =str_shuffle($string);
$half = substr($string_shuffled,0,strlen($string)/2);

echo $half;
?>
<br>
<?php

$string = 'This is an example of string .';
$string_reversed =strrev($string);

echo $string_reversed;
?>
    <br>
<?php

$string = 'This is an example of string .';
$string_length =strlen($string);

echo $string_length;
?>
<br>
<?php

$string1 = 'This is an example of string .';
$string2 = 'my name is hamza';
similar_text($string1,$string2,$result) ;

echo "the simplicity of string is " . $result;
?>

    <br>
<?php

$string = 'This is an example of string .';
$string_trim =trim($string);

echo $string_trim;
?>