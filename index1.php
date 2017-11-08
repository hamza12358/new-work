<?php
if (isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])) {
    $day = htmlentities($_GET['day']);
    $date = htmlentities($_GET['date']);
    $year = htmlentities($_GET['year']);
    if (!empty($day)&&!empty($date)&&!empty($year)){
        echo 'It is ' . $day . ' ' . $date . ' ' . $year;
    }else{
        echo 'fill the fields';
    }
}
?>

<form action="index1.php" method="gets">
    Day:<input type="text" name="day" ><br>
    Date:<input type="text" name="date"><br>
    Year:<input type="text" name="year"><br>
    <input type="submit" value="submit">

</form>
