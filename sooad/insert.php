<?php
$x=1;
$con = mysqli_connect('localhost','root','','mov');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
while($x<26){
$sql="INSERT INTO booking (movie,seatno,status,time,venue)
VALUES ('A', $x, 0,9,'B')";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
$x=$x+1;
}
echo "25 record added";
?>