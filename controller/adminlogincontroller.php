<?php

// INIT APP
include_once '../app/init.php';

if( isset($_POST['Login'])):

	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	if(!$conn):
		echo "<script> alert('Connection Failed') </script>";
	else:

		$sql="SELECT * FROM admin WHERE admin_username=\"$user\" and admin_password=\"$pass\"";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result)>0):
			//output data of each row
			$row = mysqli_fetch_assoc($result);
			session_start();
			header("Location:../admin/admin.php");
		else:				
			echo "<script> alert('Wrong Username or Password'); </script>";
		endif;

	endif;
endif;
?>