<?php 
session_start();
session_destroy();
unset($_SESSION['NAME']);
header('location: ../login.php');

 ?>