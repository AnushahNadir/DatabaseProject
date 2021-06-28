<?php
include("connect.php");

?>



<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
	<link rel="stylesheet" type="text/css" href="css/admin1-style.css">
</head>
<body>
	<header>
		<h1 id="logo">Car Rental System</h1>
	</header>
	<nav>
	<ul>
		<li><a href="home.php"> HOME</a></li>
		<li><a href="aboutus.php"> ABOUT</a></li>
		
	</ul>
</nav>
<main>
	<h1 id="ad1">Admin Panel</h1>
	<h1 id="ad2">Admin Login Area</h1>
	<table>
		<form method="post" action="admin_validation.php">
				<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
				<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input id="td1" type="submit" name="" value="login Here!">
				</td>
		</form>
	</table>

</main>
<footer>
	Copyright &copy car rental.pk, All Right Reserved.
</footer>



</body>
</html>