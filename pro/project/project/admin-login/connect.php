<?php
  $servername="localhost";
  $username="root";
  $password="";
  $db="car";

  $conn=mysqli_connect("localhost","root","","car");
  if(!$conn){
  	echo "database connection failed";
  }
?>