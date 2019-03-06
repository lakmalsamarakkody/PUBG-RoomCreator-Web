<?php

// INIT APP
include_once '../app/init.php';

// REGISTRATION
if( isset($_POST['createroom']))
{
	$room_id = "2";
	$group_id = "3";
	$date = $_POST['date'];
	$pr_id = $_POST['pr_id'];
	$pr_ps = $_POST['pr_ps'];
	$server = $_POST['server'];
	$pp = $_POST['pp'];
	$mode = $_POST['mode'];
	$map_type = $_POST['map_type'];
	$team = $_POST['team'];
	$opentime = $_POST['opentime'];
	$starttime = $_POST['starttime'];
	$rules = $_POST['rules'];

	if(!$conn)
		{
			echo "<script> alert('Connection Failed') </script>";
		}
	else
		{	
			$sql="INSERT INTO user (room_id,group_id,date,pr_id,pr_ps,server,pp,mode,map_type,team,opentime,starttime,rules) VALUES ('$room_id','$group_id','$date','$pr_id','$pr_ps','$server','$pp','$mode','$map_type','$team','$opentime','$starttime','$rules')";
			$result=$conn->query($sql);
			echo "<script> alert('Room Created Successfully') </script>";
		}
}
?>