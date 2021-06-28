<?php 
 include("connect.php");
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>register page</title>
	<script src="validaton.js"></script>
	<link rel="stylesheet" type="text/css" href="css/registerstyle.css">
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
	<h1>what are you looking for?</h1>
	<h1>SignUp Here</h1>
	<table>
		<form action="registration.php" method="post" onsubmit="return validate()">
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="firstname" required></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lastname" required=""></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
					<input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">Female
					<input type="radio" name="gender" value="other">Others
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" required=""></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" required=""></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input id="td1" type="submit" name="btnRegister" value="Register!">
					<input id="td2" type="reset" name="btnReset" value="Reset Form">
				</td>
			</tr>	
		</form>
	</table>
</main>

</body>
</html>