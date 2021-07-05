<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$searchKey = $_GET['key'];
echo $searchKey;
$ar = preg_split('/(?<=[0-9])(?=[a-z]+)/i',$searchKey);
$string = "<option>SELECT AN OPTION</option>";
$sql = "SELECT * FROM availablecourse WHERE classid = '$ar[0]'";
$res = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($res)){
    $string .= "<option value='".$row['id']."'>".$row['name']."</option>";
}
echo $string;
?>
