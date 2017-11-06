<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script>
function log()
{
 alert("You have logged out");
}
</script>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $_SESSION['login']; ?></i></b>
<b id="Menu ">Click here to place Order:<a href="men.html">Order</a></b>
<b id="logout"><a href="logout.php" onclick="log()">Log Out</a></b>
</div>
</body>
</html>