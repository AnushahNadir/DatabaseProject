<?php
session_start();
include('connect.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>add car</title>
	<link rel="stylesheet" type="text/css" href="css/add_car_style.css">
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
	<div id="div1">
	<h1 id="ad1">Admin Panel</h1>
<h1>Add New Vehicles</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<h3>Vehicle name:</h3>
		<input type="text" name="car_name" required />
		<h3>Vehicle make:</h3>
		<input type="text" name="car_type" required />
		<h3>Vehicle hire price:</h3>
		<input type="text" name="hire_cost" required />
		<h3>Vehicle image:</h3>
		<input type="file" name="image" required />
		<h3>Vehicle capacity</h3>
		<input type="text" name="capacity" required /></br></br>
		<input class="sb" type="button" value="preview" />
		<input class="sb" type="submit" value="submit" name="send" />
			</form>
		</div>



			<?php
							if(isset($_POST['send'])){
								
								$target_path = "../cars/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								$car_name = $_POST['car_name'];
								$car_type = $_POST['car_type'];
								$hire_cost = $_POST['hire_cost'];
								$capacity = $_POST['capacity'];
								
								$qr = "INSERT INTO cars (image, car_name,car_type,hire_cost,capacity,status) 
													VALUES ('$image','$car_name','$car_type','$hire_cost','$capacity','Available')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_vehicle.php\")
											</script>";
									}
								}
								else 'Failed';
							}
						?>

</main>
</body>
</html>