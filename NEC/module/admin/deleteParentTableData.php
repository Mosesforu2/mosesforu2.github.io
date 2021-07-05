<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
if($_POST['submit']){
    $id = $_POST['id'];
    $sql = "DELETE FROM parents WHERE id = '$id';";
    $success = mysqli_query($link, $sql);
    $sql = "DELETE FROM users WHERE userid = '$id';";
    $success = mysqli_query($link, $sql);
    if(!$success) {
        die('Could not Delete data: '.mysqli_error());
    }
    echo "Delete data successfully\n";
    header("Location:../admin/deleteParent.php");
}
?>
