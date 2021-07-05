<?php  
include_once('main.php');
$sid=$_REQUEST['id'];
$attendmon = "SELECT * FROM payment WHERE studentid='$sid'";
$resmon = mysqli_query($link, $attendmon);
echo "<tr><th>Payment ID</th>
			  <th>Child ID</th>
			  <th>Payment Amount</th>
			  <th>Payment Month</th>
			  <th>Payment Year</th></tr>";
while($stinfo=mysqli_fetch_array($resmon))
{
 echo "<tr><td>",$stinfo['id'],"</td>
			  <td>",$stinfo['studentid'],"</td>
			  <td>",$stinfo['amount'],"</td>
			  <td>",$stinfo['month'],"</td>
			  <td>",$stinfo['year'],"</td></tr>";

}
?>
