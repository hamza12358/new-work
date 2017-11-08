
<?php
error_reporting(0);
session_start();

    echo 'welcome' . $_SESSION['username'] . 'the age is' . $_SESSION['age'];

