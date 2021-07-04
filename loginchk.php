<?php
	session_start();
	$uname=$_POST["txtname"];
	$upass=$_POST["txtpass"];
	include_once "cf.php";
	$qry="select * from login where username='$uname' and password='$upass'";
	$rs=mysqli_query($con,$qry);
	
	if (intval($_SESSION["ans"])!=intval($_POST["txtans"]))
	{
		$msg="Incorrect Expression Answer";
		header("Location: login.php?err=$msg");
		die();
	}
	
	if (mysqli_num_rows($rs)==1)
	{
		setcookie("chkuser","1");
		setcookie("location","anand",time()+7*24*3600);
		header("Location: qf.php");
		//echo "<br>Correct";
		$_SESSION["ans"]=$uname;
	}
	else
	{
		$msg="Incorrect Username and Password";
		//echo "<br>$msg";
		header("Location: login.php?err=$msg");
	}	

?>