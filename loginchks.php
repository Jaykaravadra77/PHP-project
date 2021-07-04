<?php
	include_once "cf.php";
	session_start();
	$regno=$_POST['regno'];
	
	if (intval($_SESSION["ans"])!=intval($_POST["txtans"]))
	{
		$msg="Incorrect Expression Answer";
		header("Location:search.php?err=$msg");
		die();
	}
	else
	{
		 $qry="select stud_data.srno ,stud_data.name,stud_data.rollno,stud_data.sem,stud_data.regno, stud_result.javagp,stud_result.rdbmsgp,stud_result.phpgp,stud_result.basicgp, stud_result.economygp,stud_result.soilgp,stud_result.extenshiongp,stud_result.systemgp,stud_result.totalgp,stud_result.result
	   from stud_data,stud_result where stud_data.srno=stud_result.srno AND stud_data.regno=$regno";
	
	   $rs=mysqli_query($con,$qry);
	   if($rs)
	   { 
         $rn=mysqli_num_rows($rs);
        if($rn>0)
		 {			
		setcookie("studlogin","1");
		setcookie("location","anand",time()+7*24*3600);
		$_SESSION["regno"]=$regno;
		header("Location: sq.php");
		}else
		{
			$msg="Incorrect regno";
		header("Location:search.php?err=$msg");
		}
		//echo "<br>Correct";

	}
	
	}
?>