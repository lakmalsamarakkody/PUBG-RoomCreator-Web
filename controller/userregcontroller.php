<?php

// INIT APP
include_once '../app/init.php';

// REGISTRATION
if( isset($_POST['createuser']))
{
	//ign validation
	if (empty($_POST["ign"])) 
	{
		$ignerr = "In Game Name is required";
	} 

	else 
	{
		$ign = test_input($_POST["ign"]);
		if (!preg_match("/^[a-zA-Z0-9]*$/",$ign)) 
		{
			$ignerr = "Only letters are allowed"; 
		}
	}

	//first name validation
	if (empty($_POST["fn"])) 
	{
		$fnerr = "First Name is required";
	} 

	else 
	{
		$fn = test_input($_POST["fn"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$fn)) 
		{
			$fnerr = "Only letters are allowed"; 
		}
	}

	//last name validation
	if (empty($_POST["ln"])) 
	{
		$fnerr = "Last Name is required";
	} 

	else 
	{
		$ln = test_input($_POST["ln"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$ln)) 
		{
			$lnerr = "Only letters are allowed"; 
		}
	}

	$fn = test_input($_POST['gen']);
	$mn = test_input($_POST['mn']);
	$wn = test_input($_POST['wn']);
	$gl = test_input($_POST['gl']);
	$email = test_input($_POST['email']);
	$fb = test_input($_POST['fb']);
	$fburl = test_input($_POST['fburl']);

	if(!$conn)
		{
			echo "<script> alert('Connection Failed') </script>";
		}
	else
		{	
			$sql="INSERT INTO user (ign,first_name,last_name,gender,mobile,whatsapp,game_level,email,fb_name,fb_url) VALUES ('$ign','$fn','$ln','gen','$mn','$wn','$gl','$email','$fb','$fburl')";
			$result=$conn->query($sql);
			echo "<script> alert('User Created Successfully') </script>";
		}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>