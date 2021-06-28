<?php
	include 'connect.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM message WHERE id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Message Successfully deleted\");
					window.location = (\"client_msg.php\")
				</script>";
	}
?>
