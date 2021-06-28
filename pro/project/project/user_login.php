<?php
 session_start(); 
 include("connect.php");
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>
		login page
	</title>
	<link rel="stylesheet" type="text/css" href="css/login-style.css">
</head>
<body>
	<header>
		<h1 id="logo">Car Rental System</h1>
	</header>
	<nav>
	<ul>
		<li><a href="home.php"> HOME</a></li>
		<li><a href="login.php"> LOGIN</a></li>
		<li><a href="register.php"> REGISTER</a></li>
		<li><a href="aboutus.php"> ABOUT</a></li>
		<li><a href="contactus.php"> CONTACT US</a></li>
			</ul>
</nav>
<main>
	<h1>Login Here</h1>
	<table>
		<form action="validation.php" method="post">
				<tr>
				<td>Name</td>
				<td><input type="text" name="firstname"></td>
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
				<td><a href="register.php">SignUp Here</a></td>
			</tr>	
		</form>
	</table>
</main>


</body>
</html>