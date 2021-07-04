<?php
	session_start();
	if (!(isset($_COOKIE["studlogin"])))
	{
		header("Location:search.php");
		die("First Login to access this service");
	}

/*	echo "<br>".session_id();
	echo "<pre>";
	print_r($_COOKIE);
	print_r($_SESSION);
	print_r($_SERVER);
	echo "</pre>";
*/
?>