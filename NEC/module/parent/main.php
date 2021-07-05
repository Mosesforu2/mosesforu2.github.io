<?php
include_once('../../service/mysqlcon.php');
$check=$_SESSION['login_id'];
$query = "SELECT fathername  FROM parents WHERE id='$check'";
$session=mysqli_query($link, $query);
//$session=mysqli_query("SELECT fathername  FROM parents WHERE id='$check' ");
$row=mysqli_fetch_array($session);
$login_session = $loged_user_name = $row['fathername'];
if(!isset($login_session))
{
header("Location:../../mono");
}

?>
