<?php
session_start();
include('connect.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>add vehicle</title>
	<link rel="stylesheet" type="text/css" href="css/add_vehicle_style.css">
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this car?")){
				window.location.href ='delete_car.php?id='+id;
			}
		}
	</script>
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
	<div id="main1">
	<h1 id="our_veh">Our Vehicles</h1>
	<table border="2">
		<tr>
			<th class="header">Vehicle Make</th>
			<th class="header">Car Type</th>
			<th class="header">Hire Price</th>
			<th class="header">Content Control</th>
		</tr>
		<?php
								include 'connect.php';
								$select = "SELECT * FROM cars WHERE status = 'Available'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr class="tr1">
								<td class="data"><h3><?php echo $row['car_type'] ?></h3></td>
								<td class="data"><?php echo $row['car_name'] ?></td>
								<td class="data"><?php echo $row['hire_cost'] ?></td>
								<td class="data"><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Delete</a></td>
							</tr>
							<?php
								}
		?>
		
	</table>
</div>
</main>

<aside>
   <h2 id="mang1">Management</h2>
   <a href="add_car.php"> <img src="images/add_new.jpg"></a>
   <a href="add_car.php"> <h2 id="mang2">Add New cars</h2></a>
</aside>
</body>
</html>