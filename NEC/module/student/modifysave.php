<?php  
include_once('main.php');
$password=$_REQUEST['password'];
$mod = "UPDATE students, users SET students.password='$password',users.password = '$password' WHERE students.id = users.userid AND students.id ='$check'";
$resmon = mysqli_query($link, $mod);
header('location:modify.php');
?>
