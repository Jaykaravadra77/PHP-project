<?php
include "chkdata.php";
include "ha.php";
$tit=$_POST['tit'];
echo $tit;

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
 echo"<form method=post action=addpq.php>
		<table table border=1 width=500 align=center  bordercolor=black>
			<tr>
				<td align=center><table border=0 width=auto bgcolor='#BDB76B'  class='table table-striped table-dark'>
			<tr>
				<td colspan=2 align=center><font color=red><h4>Student detail</h4></font></td>
			</tr>			
			<tr>
				<td><font color=black><font size=4>Rollno</font></font></td>
				<td><input type=number name=roll  min=0 max=$tit ></td>
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
<td><input type=submit name=s1 value='submit'></td>			
		</table>";
	     ?>
<?php
include "f2.php";
?>