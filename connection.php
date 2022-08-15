<?php
$mysql_hostname = "localhost:3307";
$mysql_user = "root";
$mysql_password = "Nawaz@php7";
$mysql_database ="search";

$dbh = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database)
or 
die("Could not connect to database");
 mysqli_select_db($dbh, $mysql_database) or die("Could not connect to database");

?>