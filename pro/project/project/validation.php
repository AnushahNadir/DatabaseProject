 <?php
 session_start();
 include('connect.php');


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'car');

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];

$s="select * from user where firstName='$fname' && password='$password'";
$result=mysqli_query($con, $s);


$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['NAME']= $fname;
	header('location:login/home.php');
}
else{
	header('location: user_login.php');
}
  ?>