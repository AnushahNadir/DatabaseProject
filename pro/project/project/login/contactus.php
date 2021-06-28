<!DOCTYPE html>
<html>
<head>
	<title>contact page</title>
	<link rel="stylesheet" type="text/css" href="css/contact_style.css">
</head>
<body>
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
	<h1>Contact Us</h1>
	<h1>
		you have any question or need additional information?
	</h1>
	<table>
		<form method="post">
		<tr>
			<td><input type="text" name="firstname" placeholder="First Name:"></td>
		</tr>
		<tr>
			<td><input type="text" name="lastname" placeholder="Last Name:"></td>
		</tr>
		<tr>
			<td><input type="text" name="tel_no" placeholder="Telephone No:"></td>
		</tr>
		<tr>
			<td><input type="text" name="email" placeholder="Email:"></td>
		</tr>
		<tr>
			<td><textarea name="message" placeholder="Enter Message Here" class="txt"></textarea></td>
		</tr>
		<tr>
			<td><input id="msg" type="submit" name="send" value="submit Message"></td>
		</tr>
	</form>
	<?php
					if(isset($_POST['send'])){
						include 'connect.php';
						
						$fname = $_POST['firstname'];
						$lname = $_POST['lastname'];
						$tel = $_POST['tel_no'];
						$email = $_POST['email'];
						$message = $_POST['message'];
						
						$qry = "INSERT INTO message (message,firstname,lastname,tel_no,email)
							VALUES('$message','$fname','$lname','$tel','$email')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Successfully Send\");
											window.location = (\"success.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Message Not Send. Try Again\");
											window.location = (\"contactus.php\")
											</script>";
							}
					}
				?>



	</table>
</main>
<footer>
	Copyright &copy car rental.pk, All Right Reserved.
</footer>

</body>
</html>