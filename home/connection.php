<?php
 $name="31.170.166.97";
 $user="root";
 $pwd ="h3m@nth";//root";

 mysql_connect($name,$user,$pwd) or die("could not connect!");
 $db_name = "pulsetest";
 mysql_select_db($db_name) or die("database does not exist!");
?>
