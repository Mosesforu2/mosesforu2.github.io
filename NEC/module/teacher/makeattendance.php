<?php
include_once('index.php');
$atten=$_REQUEST['attendance'];
//print_r($_REQUEST);
 $d=date("Y-m-d");
$conn=mysqli_connect('localhost','root','moSeS1998#', 'schoolmsdb');
if(!$conn){
   die('error connecting ');
   }
  // mysql_select_db('schoolmanagementsystemdb',$conn);
  
   foreach($atten as $a)
   {
	   
	   $sql="insert into attendance(date,attendedid) values('$d','$a')";
	   mysqli_query($link, $sql);
   }
   
   
   
   
   
  


  

?>
<html>
 <center>
 <h4>Attendance Successfully.</h4>
  <p>go home page.click Home button.<p>
 </center>
</html>