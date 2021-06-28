<!DOCTYPE html>
<html>
<head>
	<title>client request</title>
	<link rel="stylesheet" type="text/css" href="css/clientreq_style.css">
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to Approve this request?")){
				window.location.href ='approve.php?id='+id;
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
	<section id="sec">
		<h1 id="client">Client Request</h1>
		<table border="2">
							<tr>
								<th class="header">Client Name</th>
								<th class="header">Client Email</th>
								<th class="header">Car Booked</th>
								<th class="header">Car Rent</th>
								<th class="header">Content Control</th>
							</tr>
							<?php
								include 'connect.php';
								$select = "SELECT user.id,user.firstName,user.email,cars.car_name,cars.hire_cost FROM user JOIN cars ON  user.car_id=cars.car_id";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td class="data"><?php echo $row['firstName'] ?></td>
								<td class="data"><?php echo $row['email'] ?></td>
								<td class="data"><?php echo $row['car_name'] ?></td>
								<td class="data"><?php echo $row['hire_cost'] ?></td>
								<td class="data"><a href="javascript:sureToApprove(<?php echo $row['id'];?>)" class="ico del">Approve</a></td>
							</tr>
							<?php
								}
							?>
						</table>
	</section>
</main>

</body>
</html>