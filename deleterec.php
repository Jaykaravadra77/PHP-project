<?php
include "chkdata.php";
	include "cf.php";
	$qry="delete from stud_result where stud_result.srno=".$_GET['rid'];
	$qry1="delete from stud_data where stud_data.srno=".$_GET['rid'];
	

	
	$rs=mysqli_query($con,$qry);
	$rs1=mysqli_query($con,$qry1);
	 if($rs)
	 {
	 
	 }
	 if($rs1)
	 {
	   header("location:qf.php");
	 }else
	 echo mysqli_error($con);
	
?>