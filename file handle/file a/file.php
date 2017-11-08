<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if (!empty($name)) {
        $handle = fopen('names.txt', 'a');
        fwrite($handle, $name . "\n");
        fclose($handle);
    } else {
        echo 'please type name';
    }

}

?>
<form action="file.php" method="post">
    Names : <input type="text" name="name">
    <input type="submit" name="submit">
</form>
