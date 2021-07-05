<?php  
include_once('main.php');
$childid=$_REQUEST['childid'];

$classget = "SELECT  * FROM class where id in(select DISTINCT classid from course where studentid='$childid')";
$res= mysqli_query($link, $classget);

while($cln=mysqli_fetch_array($res))
{
 echo '<option value="',$cln['id'],'" >',$cln['name'],'</option>';
   
}


?>


