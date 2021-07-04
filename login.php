<?php
include "hl.php";
	session_start();
	$num1=rand(1,9);
	$num2=rand(1,9);
	$_SESSION["ans"]=$num1+$num2;
	
	if (isset($_GET["err"]))
	{
		echo "<center><font color=#a00>".$_GET["err"]."</font></center>";
	}
?>
<BODY>
	<FORM action="loginchk.php" method="post">
	<div>
	 <h1>&nbsp;</h1>
	 <h1>&nbsp;</h1>
	
	</div>
	
	<TABLE BORDER=0 valign="bottom" align=center>
		<TR>
			<TD>User name</TD>
			<TD><INPUT type=text name=txtname></TD>
		</TR>
		
		<TR>
			<TD>Password</TD>
			<TD><INPUT type=password name=txtpass></TD>
		</TR>
		<tr> 
		
		</tr>
		<TR>
			<TD><?=$num1 ?> + <?=$num2 ?></TD>
			<TD><INPUT type=text name=txtans></TD>
		</TR>
		<TR>
	
		  </TR>
		  <TD colspan=2 align=right>
		  <INPUT type=submit name=s1 value="Login">
		  <a href=temp.php><font color=black><input type=button name=btn1 value="Back"></font></a></td>
		</TR>
	</TABLE>
	</FORM>
</BODY>
<div>

 <h1>&nbsp;</h1>
	 <h1>&nbsp;</h1>
	 <h1>&nbsp;</h1>
	 <h1>&nbsp;</h1>

</div>
<?php include"f1.php";