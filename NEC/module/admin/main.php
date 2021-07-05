<?php
include_once('../../service/mysqlcon.php');
$check=$_SESSION['login_id'];
$query = "SELECT name FROM admin WHERE id='$check'";
$session=mysqli_query($link, $query);
$row=mysqli_fetch_array($session);
$login_session = $loged_user_name = $row['name'];
if(!isset($login_session)){
    header("Location:../../");
}
?>
