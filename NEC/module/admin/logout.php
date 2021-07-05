<?php
include ('../../service/mysqlcon.php');
session_start();
session_destroy();
mysqli_close($link);
header("Location: ../../");
?>
