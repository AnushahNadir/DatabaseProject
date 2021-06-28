<?php
session_start();
include('connect.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>admin panel</title>
	<link rel="stylesheet" type="text/css" href="css/add-vehicle_style.css">
</head>
<body>
	<header>
		<h1 id="logo">Car Rental System</h1>
	</header>
	<nav>
	<ul>
		<li><a href="home.php"> HOME</a></li>
		<li><a href="aboutus.php"> ABOUT</a></li>
		<li><a href="admin_logout.php"> LOGOUT</a></li>
		<li><a href="admin_panel.php"> ADMIN PANEL</a></li>
		
	</ul>
</nav>
<main>
	<h1 id="ad1">Admin Panel</h1>
	<div class="inline">
		<a href="add_vehicle.php"> <img src="images/managment_logo.png"></a>
	<a href="add_vehicle.php"> <h1>Vehicle Managment</h1></a>
    </div >
    <div class="inline">
    	<a href="client_req.php"><img src="images/client_req.png"></a>
    	<a href="client_req.php"><h1>Client Request</h1></a>
    </div>
    <div class="inline">
    	<a href="client_msg.php"> <img src="images/client_msg.png"></a>
    	<a href="client_msg.php"><h1>Client Messages</h1></a>
    </div>
</body>
</html>