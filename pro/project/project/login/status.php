<!DOCTYPE html>
<html>
<head>
	<title>status page</title>
	<link rel="stylesheet" type="text/css" href="css/status-style.css">
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
	<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
	<section id="status">
	<h2 style="text-decoration:underline">Your Booking Status</h2>
			
			<?php
						include 'connect.php';
						session_start();
						$sel = "SELECT * FROM user WHERE status = 'Approved'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
		?>
						<h2 id="booking"><span style="font-size:25px; color: #FF0000">Booking Status:</span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['status'];?></span></h2>
					
					</section>
				
</main>


</body>
</html>