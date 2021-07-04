<html lang="en">
<body><div>
<SCRIPT language="JavaScript">
function check()
{
  cnf=confirm("are you sure?");
  return cnf;
}
</SCRIPT>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Striped Dark Table</title>
<link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src=" ./js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
		bgcolor:black;
    }
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src=" ./js/bootstrap.min.js"></script>

</style>
</head>
<?php
 include_once "cf.php";
include "chkdata.php";
 $nm=$_GET["q"];
 $qry="select stud_data.srno,stud_data.name,stud_data.rollno,stud_data.sem,stud_data.regno,
stud_result.javagp,stud_result.rdbmsgp,stud_result.phpgp,stud_result.basicgp,
stud_result.economygp,stud_result.soilgp,stud_result.extenshiongp,stud_result.systemgp,stud_result.totalgp,stud_result.result
from stud_data,stud_result where stud_data.srno=stud_result.srno and stud_result.result='$nm'";

 $rs=mysqli_query($con,$qry);
	if($rs)
	{
		$rec=mysqli_num_rows($rs);
 if($rec>0)
 {
     echo"<div>";
	 echo"<td>&nbsp</td>";
     echo"</div>";
	 echo"<div>";
	 echo"<td>&nbsp</td>";
     echo"</div>";
     echo"<div>";
	 echo"<td>&nbsp</td>";
     echo"</div>";

		echo"<table border=1 class='table table-striped table-dark'>";
	
	while($rec!=0)
	{
  
    
	$r=mysqli_fetch_assoc($rs);
	echo"<tr>";
	echo"<td>".$r['srno']."</td>";
    echo"<td>".$r['rollno']."</td>";
    echo"<td>".$r['name']."</td>";
    echo"<td>".$r['sem']."</td>";
    echo"<td>".$r['regno']."</td>";
	echo"<td>".$r['javagp']."</td>";
    echo"<td>".$r['rdbmsgp']."</td>";
	echo"<td>".$r['phpgp']."</td>";
	echo"<td>".$r['basicgp']."</td>";
	echo"<td>".$r['economygp']."</td>";
	echo"<td>".$r['soilgp']."</td>";
	echo"<td>".$r['extenshiongp']."</td>";
	 echo"<td>".$r['systemgp']."</td>";
	 echo"<td>".$r['totalgp']."</td>";
	 echo"<td>".$r['result']."</td>";
	 echo "<TD><A href=deleterec.php?rid=".$r["srno"]." >Delete</A></TD>";
	 echo"<td><a href=update.php?uid=".$r['rollno'].">upadte</a></td>";
	 
  

	$rec--;
	
      }

	     
   }else
{
	echo "<td align=center><font color=red><font size=5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Record not found</font></font></td>";
		echo"<tr>";
}
 echo"</table>";
}

	
?>

