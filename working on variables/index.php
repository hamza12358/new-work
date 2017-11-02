<?php
 if (isset($_POST['day'])&&isset($_POST['date'])&&isset($_POST['year'])) {
     $day = $_POST['day'];
     $date = $_POST['date'];
     $year = $_POST['year'];
     if (!empty($day)&&!empty($date)&&!empty($year)){
         echo 'It is ' . $day . ' ' . $date . ' ' . $year;
     }else{
         echo 'fill the fields';
     }
 }
?>

<form action="index.php" method="post">
    Day:<input type="text" name="day" ><br>
    Date:<input type="text" name="date"><br>
    Year:<input type="text" name="year"><br>
    <input type="submit" value="submit">

</form>
