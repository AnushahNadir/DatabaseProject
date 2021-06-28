<?php
$servername="localhost";
$username="root";
$password="";
$db="car;"
$conn=mysqli_connect('localhost','root','','car');
if(!$conn){
	echo "connection failed";
}
else{
	echo "connection established";
}

?>

<?php
session_start();
<h1>Welcome <?php echo $_SESSION['NAME']; ?></h1>

?>