<?php  
include_once('main.php');
$sid=$_REQUEST['id'];
$attendmon = "SELECT DISTINCT(date) FROM attendance WHERE attendedid='$sid' and  MONTH( DATE ) = MONTH( CURRENT_DATE ) and YEAR( DATE )=YEAR( CURRENT_DATE )";
$resmon = mysqli_query($link, $attendmon);
echo "<tr> <th>Attend Current Month Date:</th></tr>";
while($r=mysqli_fetch_array($resmon))
{
	echo $id,"<br/>";
 echo "<tr><td>",$r['date'],"</td></tr>";

}
?>
