<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<head>
	<title>book page</title>
	<link rel="stylesheet" type="text/css" href="css/book_style.css">
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
		<li><a href="status.php"> VEIW STATUS</a></li>
        <li><a href="logout.php"> LOGOUT</a></li>
		</ul>
</nav>
<main>
	<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
	<ul>
			<?php
						include 'connect.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
			<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="../cars//<?php echo $rws['image'];?>" width="300" height="200">
					</a>

					<span class="price"><?php echo 'Rs.'.$rws['hire_cost'];?></span>
				
						<h2>
							<?php echo $rws['car_name'];?>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><button id="button">Book Now</button></a>
						</h2>
				</li>
			<?php
				}
			?>
			</ul>
	
	
</main>
</body>
</html>