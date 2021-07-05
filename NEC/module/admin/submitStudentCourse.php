<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
echo 'a';
if(!empty($_GET)){
    $courseid = $_GET['courseid'];
    $classid = $_GET['classid'];
    $teacherid = $_GET['teacherid'];
    $courseName = $_GET['coursename'];
    $sql = "SELECT id from students where classid='$classid'";
    $res = mysqli_query($link, $sql);
    $row_cnt = mysqli_num_rows(($res));
    echo $row_cnt;
    while($row_cnt && $row = mysqli_fetch_array($res)){
        print_r($row);
        $studentid = $row['id'];
        $sql = "INSERT INTO course VALUES('$courseid','$courseName','$teacherid','$studentid','$classid')";
        $success = mysqli_query($link, $sql);
        if(!$success) {
            die('Could not enter data: '.mysqli_error());
        }
        echo "Entered data successfully\n";
        $row_cnt = $row_cnt - 1;
    }
    if(!$success) {
        die('Could not enter data: '.mysqli_error());
    }
    echo "Entered data successfully\n";
}
?>
