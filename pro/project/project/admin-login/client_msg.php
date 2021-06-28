<html>
<head>
	<title>client request</title>
	<link rel="stylesheet" type="text/css" href="css/clientreq_style.css">
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this message?")){
				window.location.href ='delete_msg.php?id='+id;
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
		<h1 id="msg">Client Messages</h1>
	<table border="2">
		<tr>
			<th class="header">Message Content</th>
			<th class="header">Name</th>
			<th class="header">Phone_No</th>
			<th class="header">Email</th>
			<th class="header">Content Control</th>
		</tr>
		<?php
		include 'connect.php';
		$select = "SELECT * FROM message";
		$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
								<tr class="tr1">
								<td class="data"><h3><?php echo $row['message'] ?></h3></td>
								<td class="data"><?php echo $row['firstName'] ?></td>
								<td class="data"><?php echo $row['tel_no'] ?></td>
								<td class="data"><?php echo $row['email'] ?></td>
								<td class="data"><a href="javascript:sureToApprove(<?php echo $row['id'];?>)" class="ico del">Delete</a></td>
							</tr>
							<?php
								}
		?>

	</table>
</section>
	
</main>
</body>
</html>