<?php

session_start();
header('location:account.html');

$mysql_hostname = "localhost:3307";
$mysql_user = "root";
$mysql_password = "Nawaz@php7";

$connection = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password);

mysqli_select_db($connection, 'userreg')
or 
die("Could not connect to database");

$mobile = $_POST['mobile'];
$password = $_POST['password'];

$q = "select * from registration where mobile = '$mobile' && password='$password'";

$result = mysqli_query($connection, $q);

$num = mysqli_num_rows($result);

if($num==1){
    header('location:book.html');
}
else{
    header('location:account.html');
}

?>

