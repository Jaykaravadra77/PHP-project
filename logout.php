<?php
	session_start();
	setcookie("chkuser","0",time()-12);
	session_destroy();
	//print_r($_SESSION);
	header("Location: login.php");
?>