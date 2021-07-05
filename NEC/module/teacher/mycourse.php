<?php  
include_once('main.php');
 $emn = $_REQUEST['classid'];


$courses = "SELECT distinct id , name FROM course WHERE classid='$emn' and teacherid='$check'";
$rescourse = mysqli_query($link, $courses);

while($r=mysqli_fetch_array($rescourse))
{
 echo '<option value="',$r['id'],'" >',$r['name'],'</option>';

}


?>
