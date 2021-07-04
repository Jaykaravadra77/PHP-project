<?php include "ha.php";
include "chkdata.php";

if (isset($_GET['err']))
	{
     	echo"<center><font color=#a00><font size=4>".$_GET['err']."</font></font></center>";
	}

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

<form action=addp.php method=post>

<table table border=0  bordercolor=black width=500 align=center  >
            <tr>
			<td align=center><h3>Enter Total marks of exam<h3></td>
			</tr>
			<tr>
				<td align=center><table border=0 width=auto bgcolor='#BDB76B'  class='table table-striped table-dark'>			
			<tr>
				<td><font color=black><font size=4>Total internal theory mark</font></font></td>
				<td><input type=text name=tit required value></td>
			</tr>
			<tr>
				<td><font color=black><font size=4>Total internal practical mark</font></font></td>
				<td><input type=text name=tip ></td>
			</tr>
			<tr>
				<td><font color=black><font size=4>Total external theory mark</font></font></td>
				<td><input type=text name=tet></td>
			</tr>
			<tr>
				<td><font color=black><font size=4>Total external practicalmark mark</font></font></td>
				<td><input type=text name=tep></td>
			</tr>
			<tr>
				<td><input type=submit name=s1 value="submit">
				<a href=qf.php><font color=black><input type=button name=btn1 value=Back></font></a> </td>
			</tr>
			</table>
			
</form>
<?php include"f1.php";
?>