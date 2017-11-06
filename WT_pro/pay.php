<?php
session_start();
$amt=$_POST['a2'];
$usr=$_SESSION['login'];
if(!isset($_SESSION['login']))
{
die ("Login first<br><a href='Home.php'>Click here to Login</a>");
}
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("piz_serv", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("INSERT INTO `bills` (`userid`, `amt`) VALUES ('$usr', '$amt');", $connection);
if (!$query)
{
    die('Invalid query: ' . mysql_error());
}   
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b>Thank You<br> Your order of <?php echo $amt; ?> is placed on this number:<i><?php echo $_SESSION['login']; ?></i></b>
<b id="Menu ">Click here to place a new Order:<a href="menu.html">Order</a></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>