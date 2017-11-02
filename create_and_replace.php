<?php

$offset = 0;


if (isset($_POST['text'])&&isset($_POST['search'])&&isset($_POST['replace'])){
    $text = $_POST['text'];
    $search = $_POST['search'];
    $replace = $_POST['replace'];

    $search_length = strlen($search);

    if (!empty($text)&&!empty($search)&&!empty($replace)){

        while ($strpos = strpos($text, $search, '0')){
             $offset = $strpos + $search_length;
             $text = substr_replace($text, $replace , $strpos ,$search_length);
        }

        echo $text;

    }else{
        echo 'fill all fields';
    }
}

?>


<form action="create_and_replace.php" method="post">
    <textarea name="text" rows="6" cols="30"></textarea><br><br>
    Search:<br>
    <input type="text" name="search">
    <br><br>
    Replace:<br>
    <input type="text" name="replace"><br><br>

    <input type="submit" value="find and replace">
</form>
