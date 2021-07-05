<?php
include_once('main.php');

    $id = $_REQUEST['id'];
    $sg= "DELETE FROM payment WHERE id = '$id'";
    $success = mysqli_query($link, $sg);

    header("Location:deletePayment.php");

?>
