<?php
$q = $_SESSION['venue'];
$p = $_SESSION['time_slot'];
$r = $_SESSION['movie'];

$con = mysqli_connect('localhost','root','','mov');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM booking WHERE movie = '".$r."' AND time=".$q." AND venue='".$p."'";
$result = mysqli_query($con,$sql);

echo "<table border='5px' cellpadding='10px' cellspacing='10px' align='center'>";
var $c=0;

echo "<tr>";

while($row = mysqli_fetch_array($result)) {
  if($row['status']=1)
  {
	echo "<td bgcolor=red>booked</td>";
  }
  else
  {
  echo "<td bgcolor=green><button onclick="bill(200)">".$row['seatno']."</button></td>";
  }
  $c=$c++;
  if(($c%5)==0)
  {
  echo "</tr>";
  }
}
echo "</table>";

mysqli_close($con);
?>