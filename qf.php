<?php  include "chkdata.php";
  include "h2.php";
?>
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
<FORM>


  <div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  </div>
   <div class='bs-example'>
   <table border=0 align=center>
   <tr>
	<td>Enter regno:</td> 
    <td><input type=text name=regno></td>
	</tr>
	<td align=center colspan=2><input type=submit name=s1 value="Search" > 
	 <a href=ajaxForm2.php><font color=black><input type=button name=s1 value="short"></font></a></td>
	</tr>
	</table>
	</div>
</FORM>

<?php
	include_once "cf.php";
	if (isset($_GET["regno"]))
		$nm=$_GET["regno"];
	else
		$nm="";
	$qry="select stud_data.srno,stud_data.name,stud_data.rollno,stud_data.sem,stud_data.regno,
stud_result.javagp,stud_result.rdbmsgp,stud_result.phpgp,stud_result.basicgp,
stud_result.economygp,stud_result.soilgp,stud_result.extenshiongp,stud_result.systemgp,stud_result.totalgp,stud_result.result
from stud_data,stud_result where stud_data.srno=stud_result.srno and stud_data.regno=$nm";



	$rs=mysqli_query($con,$qry);
	if ($rs)
	{
    echo"<div class='bs-example'>";
	echo "<TABLE BORDER=1 align=center class='table table-striped table-dark'>";
		echo"<th>srno</th><th>Roll no</th><th>Name</th><th>sem</th><th>regno</th><th>javagp</th><th>rdbmsgp</th><th>phpgp</th>
<th>binstrumentiongp</th><th>economygp</th><th>soilgp</th><th>extenshiongp</th><th>system analisisgp</th>
<th>totalgp</th><th>result</th><th>&nbsp</th><th>&nbsp</th>";
	     $nr=mysqli_num_rows($rs);
		 if($nr>0)
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
				echo"</tr>";
			echo"</table>";
			  echo"</div>";
		
           echo"<td><a href=qf.php><font color=black><input type=button name=btn1 value=Back></font</a> </td>";
		   	echo"</tr>";
			
	      }else
		    {
				echo "<font color=red><font size=5>Record not found</font></font>";
				echo "<br>";
				 echo"<a href=qf.php><input type=button name=btn1 value=Back></a> ";
			}
}else 
{
	 $qry="select stud_data.srno,stud_data.name,stud_data.rollno,stud_data.sem,stud_data.regno,
	stud_result.javagp,stud_result.rdbmsgp,stud_result.phpgp,stud_result.basicgp,
	stud_result.economygp,stud_result.soilgp,stud_result.extenshiongp,stud_result.systemgp,stud_result.totalgp,stud_result.result
	from stud_data,stud_result where stud_data.srno=stud_result.srno ORDER BY stud_data.rollno asc";
	  echo"<div class='table-responsive'>";
  echo "<table border=1 class='table table-striped table-dark' bgcolor='black'>";
	echo"<th>srno</th><th>Roll no</th><th>Name</th><th>sem</th><th>regno</th><th>javagp</th><th>rdbmsgp</th><th>phpgp</th>
	<th>binstrumentiongp</th><th>economygp</th><th>soilgp</th><th>extenshiongp</th><th>system analisisgp</th>
	<th>totalgp</th><th>result</th><th>&nbsp</th><th>&nbsp</th>";
	$rs=mysqli_query($con,$qry);
	if($rs)
	{
	$rec=mysqli_num_rows($rs);
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

	 
	
	echo"</tr>";
	$rec--;
	
      }
	}
	echo "</table>";
	  echo"<div>";
     echo"<a href=totali.php ><font color=black><input type=button name=btn1 value=Add></font></a> </td>";
	 
}	
include "f1.php";	
?>

