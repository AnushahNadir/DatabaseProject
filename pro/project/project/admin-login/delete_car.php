<?php
	include 'connect.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM cars WHERE car_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Car Successfully deleted\");
					window.location = (\"add_vehicle.php\")
				</script>";
	}
?>
