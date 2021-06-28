<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<head>
	<title>book car page</title>
	<link rel="stylesheet" type="text/css" href="css/bookcar_style.css">
</head>
<body>
	<header>
		<h1 id="logo">Car Rental System</h1>
	</header>
	<nav>
	<ul>
		<li><a href="home.php"> HOME</a></li>
		<li><a href="contactus.php"> CONTACT US</a></li>
		<li><a href="book.php"> BOOK CAR</a></li>
		<li><a href="status.php"> VIEW STATUS</a></li>
        <li><a href="logout.php"> LOGOUT</a></li>
		</ul>
</nav>
<main>
	<h2 style="text-align: center">Find You Dream Cars For Hire</h2>
	<ul>
				<h2 style="text-align:center; color:#FF0000; font-family: 'Courier New', Courier, monospace">Thank you for sending a request. </br>
				We will get back to you once we verify your payment.<br>
				You can login to view the processing status of your request using your email and password.</h2>
			</ul>
		</main>
	</body>
	</html>