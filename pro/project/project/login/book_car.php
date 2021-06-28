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
		<li><a href="status.php"> VEIW STATUS</a></li>
        <li><a href="logout.php"> LOGOUT</a></li>
		</ul>
</nav>
<main>
	<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
	<ul>
			<?php
						include 'connect.php';
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
			<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img src="../cars//<?php echo $rws['image'];?>" width="300" height="200">
					</a>
                      <?php echo 'Rs.'.$rws['hire_cost'];?>
					<h2>
							<?php echo $rws['car_name'];?>
						</h2>
						<h2>
							Car id= <?php echo $rws['car_id'];?>
						</h2>
				</li>
				<h1>Proceed to Hire <?php echo $rws['car_name'];?>. </h1>
				<button id="button1">
				<a href="pay.php">Click to Book</a>
			</button>
			<?php
				}
			?>
			</ul>	
</main>
</body>
</html>