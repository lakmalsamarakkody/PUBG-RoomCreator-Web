<?php 

	// INIT APP
	include_once '../app/init.php';

	if( isset($_POST['creategroup']))
	{
		$group_name = $_POST['newgroup'];
		$username = $_POST['newusername'];
		$password = $_POST['newpassword'];
		
		if(!$conn)
			{
				echo "<script> alert('Connection Failed') </script>";
			}
		else
			{	
				$sql="INSERT INTO groups (group_name,username,password) VALUES ('$group_name','$username','$password')";
				$result=$conn->query($sql);
				echo "<script> alert('Group Created Successfully') </script>";
			}
	}
?>