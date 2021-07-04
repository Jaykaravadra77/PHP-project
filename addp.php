
<?php
include "chkdata.php";
include "ha.php";
   $tit=$_POST['tit'];
   $tip=$_POST['tip'];
   $tet=$_POST['tet'];
    $tep=$_POST['tep'];
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Striped Dark Table</title>
<link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src=" ./js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: auto;
		bgcolor:black;
    }
	</style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src=" ./js/bootstrap.min.js"></script>
</head>
<?php  

	 echo"
	<form method=post action=addpq.php>
	
		<table table border=1  bordercolor=black  class='table table-striped table-dark' >
			<tr>
				<td align=center><table border=0 width=auto bgcolor='#BDB76B'  class='table table-striped table-dark'>
			<tr>
				<td colspan=2 align=center><font color=red><h4>Student detail</h4></font></td>
			</tr>			
			<tr>
				<td><font color=black><font size=4>Rollno</font></font></td>
				<td><input type=number name=roll ></td>
			</tr>
			<tr>
				<td><font color=black><font size=4>name</font></font></td>
				<td><input type=text name=name  ></td>
			</tr>
			<tr>
				<td><font color=black><font size=4>sem</font></font></td>
				<td><input type=number name=sem ></td>
			</tr>
			<tr>
				<td><font color=black><font size=4>regno</font></font></td>
				<td><input type=number name=reg  ></td>
			</tr>
			<tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				
			</tr>			
		</table>
	     </td>
		  <td><table border=0 align=center width=auto  bgcolor='#BDB76B' class='table table-striped table-dark' >
         <tr>
            <td ><h4><font color=red>Total internaltheory mark</font></h4></td>
            <td><input type=text name=tit value=$tit readonly>
		</tr>
		<tr>
			<td align=center><font color=black><font size=2 >Java</font></font></td>
			<td><input type=number name=itjtxt  min=0 max=$tit required></td>
		</tr>
		<tr>
			<td align=center><font color=black><font size=2 >Rdbms</font></font></td>
			<td><input type=number name=itdtxt  min=0 max=$tit required></td>
		</tr>
		<tr>
			<td align=center><font color=black><font size=2 >Php</font></font></td>
			<td><input type=number name=itptxt  min=0 max=$tit required></td>
		</tr>
		<tr>
		<td align=center><font color=black><font size=2 >Basic intrumention</font></font></td>
		<td><input type=number name=itbtxt  min=0 max=$tit required></td>
		</tr>
		<tr>
			<td align=center><font color=black><font size=2 >Economy</font></font></td>
			<td><input type=number name=itetxt  min=0 max=$tit required></td>
		</tr>
		<tr>
			<td align=center><font color=black><font size=2 >Soil Science</font></font></td>
			<td><input type=number name=itstxt  min=0 max=$tit required></td>
		</tr>
		<tr>
			<td align=center><font color=black><font size=2>Agricultural Extenshion</font></font></td>
			<td><input type=number name=itxtxt  min=0 max=$tit required></td>
		</tr>
			<td align=center><font color=black><font size=2>System Analisis And Desine</font></font></td>
			<td><input type=number name=itytxt  min=0 max=$tit required></td>
		</tr>
		
	</table></td>

<td><table border=0 align=center bgcolor='#BDB76B' class='table table-striped table-dark'>
<tr>
<td ><h4><font color=red>Total internalprac mark</font></h4></td>
    <td><input type=text name=tip value=$tip readonly>
</tr>
<tr>
<tr>
<td align=center><font color=black><font size=2>Java</font></font></td>
<td><input type=number name=ipjtxt min=0 max=$tip required></td>
</tr>
<tr>
<td align=center><font color=black><font size=2>Rdbms</font></font></td>
<td><input type=number name=ipdtxt  min=0 max=$tip required></td>
</tr><tr>
<td align=center><font color=black><font size=2>Php</font></font></td>
<td><input type=number name=ipptxt min=0 max=$tip required></td>
</tr><tr>
<td align=center><font color=black><font size=2>Basic intrumention</font></font></td>
<td><input type=number name=ipbtxt min=0 max=$tip required></td>
</tr><tr>
<td align=center><font color=black><font size=2 >Economy</font></font></td>
<td><input type=number name=ipetxt min=0 max=$tip required></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >Soil Science</font></font></td>
<td><input type=number name=ipstxt min=0 max=$tip required></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >Agricultural Extenshion</font></font></td>
<td><input type=number name=ipxtxt min=0 max=$tip required></td>
</tr>
<td align=center><font color=black><font size=2 >System Analisis And Desine</font></font></td>
<td><input type=number name=ipytxt min=0 max=$tip  required></td>
</tr>
<tr>

</table></td>
</tr>
<tr>
<td>
<table border=0 align=center bgcolor='#BDB76B' class='table table-striped table-dark'>
<tr>
<td ><h4><font color=red>Total externaltheory marks</font></h4></td>
    <td><input type=text name=tet value=$tet readonly>
</tr>
<tr>
<tr>
<td align=center><font color=black><font size=2 >Java</font></font></td>
<td><input type=number name=etjtxt min=0 max=$tet required></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >Rdbms</font></font></td>
<td><input type=number name=etdtxt  min=0 max=$tet  required></td>
</tr><tr>
<td align=center><font color=black><font size=2 >Php</font></font></td>
<td><input type=number name=etptxt  min=0 max=$tet  required></td>
</tr><tr>
<td align=center><font color=black><font size=2 >Basic intrumention</font></font></td>
<td><input type=number name=etbtxt  min=0 max=$tet  required></td>
</tr><tr>
<td align=center><font color=black><font size=2 >Economy</font></font></td>
<td><input type=number name=etetxt  min=0 max=$tet  required></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >Soil Science</font></font></td>
<td><input type=number name=etstxt  min=0 max=$tet  required></td>
</tr>
<tr>
<td align=center><font color=black><font size=2>Agricultural Extenshion</font></font></td>
<td><input type=number name=etxtxt  min=0 max=$tet  required></td>
</tr>
<td align=center><font color=black><font size=2>System Analisis And Desine</font></font></td>
<td><input type=number name=etytxt  min=0 max=$tet  required></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</table></td>
<td >

<table border=0 align=center  bgcolor='#BDB76B' class='table table-striped table-dark' >
<tr>
<td ><h4><font color=red>Total externalprac mark</font></h4></td>
    <td><input type=text name=tep value=$tep readonly>
</tr>
<tr>
<tr>
<td align=center><font color=black><font size=2 >Java</font></font></td>
<td><input type=number name=epjtxt min=0 max=$tep  required></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >Rdbms</font></font></td>
<td><input type=number name=epdtxt min=0 max=$tep  required></td>
</tr><tr>
<td align=center><font color=black><font size=2 >Php</font></font></td>
<td><input type=number name=epptxt min=0 max=$tep  required></td>
</tr><tr>
<td align=center><font color=black><font size=2 >Basic intrumention</font></font></td>
<td><input type=number name=epbtxt min=0 max=$tep  required></td>
</tr><tr>
<td align=center><font color=black><font size=2 >Economy</font></font></td>
<td><input type=number name=epetxt min=0 max=$tep required></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >Soil Science</font></font></td>
<td><input type=number name=epstxt min=0 max=$tep required</td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >Agricultural Extenshion</font></font></td>
<td><input type=number name=epxtxt min=0 max=$tep  required></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >System Analisis And Desine</font></font></td>
<td><input type=number name=epytxt min=0 required max=$tep ></td>
</tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</table>
<td>
<table border=0 bgcolor='#BDB76B' class='table table-striped table-dark'>
<th><font color=red>subject</font></th><th><font color=red>theory credit</font></th><th><font color=red>practical credit</font></th>
<tr>
<td align=center><font color=black><font size=2 >Java</font></font></td>
<td><input type=number name=jtc value=2 min=0 max=10></td>
<td><input type=number name=jpc value=1 min=0 max=10></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >Rdbms</font></font></td>
<td><input type=number name=rtc value=2 min=0 max=10></td>
<td><input type=number name=rpc value=1 min=0 max=10></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >Php</font></font></td>
<td><input type=number name=ptc value=2 min=0 max=10></td>
<td><input type=number name=ppc value=1 min=0 max=10></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >Basic intrumention</font></font></td>
<td><input type=number name=btc value=2 min=0 max=10></td>
<td><input type=number name=bpc value=1 min=0 max=10></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >Economy</font></font></td>
<td><input type=number name=etc value=2 min=0 max=10></td>
<td><input type=number name=epc value=0 min=0 max=10></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >Soil science</font></font></td>
<td><input type=number name=stc value=2 min=0 max=10></td>
<td><input type=number name=spc value=1 min=0 max=10></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >Agricultural Extenshion</font></font></td>
<td><input type=number name=extc value=1 min=0 max=10></td>
<td><input type=number name=expc value=1 min=0 max=10></td>
</tr>
<tr>
<td align=center><font color=black><font size=2 >System Analisis</font></font></td>
<td><input type=number name=ytc value=2 min=0 max=10></td>
<td><input type=number name=ypc value=1 min=0 max=10></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>

</tr>

</table>
</td>
</td>
</tr>
<td colspan=3 align=center><input type=submit name=sub value=submit >
 <a href=qf.php > <font color=black><input type=button name=btn1 value=Back></a><font> </td>
</table>

</form>
</html>
";


?>
<?php
include "f2.php";
?>