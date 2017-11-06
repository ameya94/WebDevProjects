<html>
	<head>
		<?php
		$mov = $_POST['movie'];
		$time= $_POST['time_slot'];
		$ven = $_POST['venue'];
		$bill=	$_POST['a2'];
		$seatno=$_POST['a3'];
		$con = mysqli_connect("localhost","root","","mov");
		$sql="UPDATE booking SET status='1' where time='$time' AND movie='$mov' AND venue='$ven' AND seatno='$seatno'";
		mysqli_query($con,$sql);
		echo "Seat Booked Please Pay";
	
	
?>
	<title>Booking
		</title>
		
		</head>
			
		<body background="cin.jpg">
		<script>
			function pay(){
				x=document.getElementById("na").value;
				if(confirm("Dear "+x+" Do you wish to pay?"))
				{	alert("Thank you for your payment.Redirecting to homepage");
					window.open("index.php");
				}
			  
			}
		</script>
			<br>
			<label>Account ID:</label>
			<br><br>
			<input type="text" id="na">
			<hr>
			<label>Password:</label>
			<br><br>
			<input type="password" />
			<a href="get_list.php">Pay</a>
			
			
		</body>
</html>