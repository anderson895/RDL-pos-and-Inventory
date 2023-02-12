<?php
	session_start();
	session_destroy();
	echo "<script> window.confirm('Are you sure to logout?');</script>";
	header("location:../index.php");
	//to redirect back to "index.php" after logging out
	exit();
?>