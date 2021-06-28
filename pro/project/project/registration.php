<?php
session_start();
header('location: user_login.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'car');

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];

$s="select * from user where firstname='$fname'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);

if($num==1){
	echo "username already taken";
}
else{
	$reg="insert into user(firstname,lastname,gender,email,password) values ('$fname','$lname','$gender','$email','$password')";
	mysqli_query($con, $reg);
	echo "registration succesfull";
}
?>