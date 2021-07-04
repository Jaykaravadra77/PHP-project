<?php session_start();
  include "hs.php";
	$num1=rand(1,9);
	$num2=rand(1,9);
	$_SESSION["ans"]=$num1+$num2;
	
	if (isset($_GET["err"]))
	{
		echo "<center><font color=#a00>".$_GET["err"]."</font></center>";
	} ?>
<form method=post action=loginchks.php>
<div>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
</div>
<table table border=0  align=center width=250>
<tr>
<td colspan=2 align=center><h3>Enter student detail<h3></td>
</tr>
<tr>
<td>Regno</td>
<td><input type=text name=regno></td>
</tr>
<TR>
			<TD><?=$num1 ?> + <?=$num2 ?></TD>
			<TD><INPUT type=text name=txtans></TD>
		</TR>
		<TR>
		<tr>
<td colspan=2 align=center><input type=submit name=s1 value="submit">
<a href=temp.php><font color=black><input type=button name=btn1 value=Back></font></a> </td>
</tr>
</form>
<?php include "f1.php";
?>