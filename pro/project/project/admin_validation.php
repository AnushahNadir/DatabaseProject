<?php
session_start();
$con=mysqli_connect('localhost','root','');


mysqli_select_db($con,'car');
$name=$_POST['name'];
$password=$_POST['password'];

$query="select * from admin where name='$name' && password='$password'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);

if ($num==1) {
	$_SESSION['username']=$name;
	header('location: admin-login/admin_panel.php');
}
else{
	echo "login failed";
	header('location: admin.php');
}


?>