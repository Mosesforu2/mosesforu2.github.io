<?php  
include_once('main.php');
 $childid = $_REQUEST['childid'];
 $classid= $_REQUEST['classid'];


$courses = "SELECT * FROM course WHERE classid='$classid' and studentid='$childid'";
$rescourse = mysqli_query($link, $courses);

while($r=mysqli_fetch_array($rescourse))
{
 echo '<option value="',$r['id'],'" >',$r['name'],'</option>';

}


?>
