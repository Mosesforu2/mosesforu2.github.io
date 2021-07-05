<?php  
include_once('main.php');
 $em = $_REQUEST['curid'];


$courseincurr = "SELECT * FROM examschedule WHERE courseid='$em' ";
$resc = mysqli_query($link, $courseincurr);

echo "<tr> <th>Exam Date:</th><th>Exam Time:</th></tr>";
while($r=mysqli_fetch_array($resc))
{
 echo "<tr><td>",$r['examdate'],"</td><td>",$r['time'],"</td></tr>";

}


?>