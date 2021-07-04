
<FORM>
	Enter User name: 
	<input type=text name=regno>
	<input type=submit name=s1 value="Search">
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
	echo "<TABLE BORDER=1>";
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
	      }else
		    {
				echo "jay";
			}
}else 
{
	 $qry="select stud_data.srno,stud_data.name,stud_data.rollno,stud_data.sem,stud_data.regno,
	stud_result.javagp,stud_result.rdbmsgp,stud_result.phpgp,stud_result.basicgp,
	stud_result.economygp,stud_result.soilgp,stud_result.extenshiongp,stud_result.systemgp,stud_result.totalgp,stud_result.result
	from stud_data,stud_result where stud_data.srno=stud_result.srno";

	echo "<table border=1>";
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
}	
	
?>