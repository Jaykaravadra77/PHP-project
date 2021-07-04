<?php
	session_start();
	setcookie("studlogin","0",time()-12);
	session_destroy();
	//print_r($_SESSION);
	header("Location: search.php");
?>