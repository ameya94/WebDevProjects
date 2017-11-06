<?php
	//session_start();
	//$_SESSION['error'];
    $mov = $_POST['movie'];
    $time= $_POST['time_Slot'];
    $ven = $_POST['venue'];
    $bill=$_POST['a2'];
	$seat=$_POST['a3'];
	// To protect MySQL injection for Security purpose
	//$bill = stripslashes($bill);
	//$bill = mysql_real_escape_string($bill);
	
	$con = mysqli_connect("localhost","root","","mov");

	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  echo $mov.$seat.$ven.$bill.$time;
	$result = mysqli_query($con,"UPDATE mov SET seat=seat+'$seat' WHERE time='$time' AND movie='$mov' AND venue='$ven'");
	$row = mysqli_fetch_array($result);
	print_r($r);
	mysqli_close($con);
	//echo $q;
	//$query = mysqli_query( $connection,$q);where time='$time' AND movie='$mov' AND venue='$ven'");
	//$rows = mysql_num_rows($query);
	echo "IN";
	//if (($query+$seat)<26 AND $row==1) {
	//mysqli_query($connection,"UPDATE mov SET seat=seat+'$seat' where time='$time' AND movie='$mov' AND venue='$ven'");
	//$_SESSION['error']="Seats Booked Succesfully";
	//header("location: booked.php"); // Redirecting To Other Page
	//} else {
	//$_SESSION['error'] ="Seats Not Available";
	//header("location: booked.php"); 
	//}
	//mysql_close($connection); // Closing Connection
?>