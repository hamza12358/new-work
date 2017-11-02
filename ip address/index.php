<?php
 require 'config.php';
 foreach ($ip_block as $ip) {
     if ($ip == $ip_address){
         die('your ip is block');
     }
 }