<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<head>
	<title>book car page</title>
	<link rel="stylesheet" type="text/css" href="css/pay_style.css">
</head>
<body>
	<header>
		<h1 id="logo">Car Rental System</h1>
	</header>
	<nav>
	<ul>
		<li><a href="home.php"> HOME</a></li>
		<li><a href="aboutus.php"> ABOUT</a></li>
		<li><a href="contactus.php"> CONTACT US</a></li>
		<li><a href="book.php"> BOOK CAR</a></li>
        <li><a href="logout.php"> LOGOUT</a></li>
		</ul>
</nav>
<main>
	<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
	<section>
		<ul>
				<h2 style="text-decoration: underline">Make Payments Here</h2>
				<form method="post">
					<table>
						<tr>
							<td><h3>Transaction ID:</h3></td>
							<td><input type="text" name="transaction_id" required></td>
						</tr>
						<tr>
							<td><h3>Car ID</h3></td>
							<td><input type="text" name="car_id" required></td>
						</tr>
						<tr>
							<td><h3>Password:</h3></td>
							<td><input type="password" name="password" required></td>
						</tr>
						
						<tr>
							<td colspan="2" style="text-align:right"><input id="submit" type="submit" name="pay" value="Submit Details"></td>
						</tr>
					</table>
				</form>
				</form>
				<?php
						if(isset($_POST['pay'])){
							include('connect.php');
							$transaction = $_POST['transaction_id'];
							$car_id =$_POST['car_id'];
							$pass = $_POST['password'];
							
							$qry = "UPDATE user SET transaction_id = '$transaction', car_id = '$car_id' WHERE password = '$pass'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Payment Successfully Done. Wait for Admin Approval\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"pay.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
	</section>
	</main>
</body>
</html>