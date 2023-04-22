<?php

include "../register/dbh.php"; 
session_start();
if($_POST)
{
	$name=$_SESSION['name'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `users`(`name`, `mesage`) VALUES ('".$name."', '".$msg."')";

	$query = mysqli_query($cnct,$sql);
	if($query)
	{
		header('Location: chat.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>