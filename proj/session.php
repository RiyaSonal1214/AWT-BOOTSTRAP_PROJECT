<?php 
	session_start();
	$Uid=$_SESSION['Uid'];
	$Uname=$_SESSION['Uname'];
	if(!(isset($Uid)))
	{
		header('location:index.php');
	}


?>