?php
	session_start();
	error_reporting("E-NOTICE");
	?>
	<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>