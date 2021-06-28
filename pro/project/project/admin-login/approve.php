<?php
	include 'connect.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE user SET status = 'Approved' WHERE id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Request has Successfully been Approved';
	}
?>
