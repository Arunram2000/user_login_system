<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<style type="">
		body{
			background-image: url(d1.jpg);
			background-position: center;
			color: white;
		}
	</style>
</head>
<body>
	<a href="logout.php">LOGOUT</a>
	<h2>Welcome  <?php echo $_SESSION['username']; ?></h2>
</body>
</html>