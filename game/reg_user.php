<?php 

session_start();

require 'connect.inc.php';


if ($_POST['name'] != '' && $_POST['email'] != '') 
{


	$name =  mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$user_ip = mysqli_real_escape_string($con, $_POST['user_ip']);
	
	$_SESSION['name'] = $name;








$query = mysqli_query($con, "INSERT INTO tbl_users (username, email, user_ip) VALUES ('$name', '$email', '$user_ip')") or die (mysqli_errno($con));
	header('location: index.php');

} 

 ?>