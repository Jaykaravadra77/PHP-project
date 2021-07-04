<?php

include "chkdata.php";
?>
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src=" ./js/bootstrap.min.js"></script>
<?php
include "cf.php";
include "ha.php";

$_SESSION['uid']=$_GET['uid'];
$qry="select * from stud_data where stud_data.rollno=".$_GET['uid'];
$qry1="select * from tempit where rollno=".$_GET['uid'];
$qry2="select * from tempip where rollno=".$_GET['uid'];
$qry3="select * from tempet where rollno=".$_GET['uid'];
$qry4="select * from tempep where rollno=".$_GET['uid'];

$rs=mysqli_query($con,$qry);
$rec=mysqli_fetch_assoc($rs);

$rs1=mysqli_query($con,$qry1);
$rec1=mysqli_fetch_assoc($rs1);

$rs2=mysqli_query($con,$qry2);
$rec2=mysqli_fetch_assoc($rs2);

$rs3=mysqli_query($con,$qry3);
$rec3=mysqli_fetch_assoc($rs3);

$rs4=mysqli_query($con,$qry4);
$rec4=mysqli_fetch_assoc($rs4);
$tit=$rec1['tit'];
$tip=$rec2['tip'];
$tet=$rec3['tet'];
$tep=$rec4['tep'];


?>
<?php
echo "
<form method=post action=updatei.php>
<table table border=5 >

<tr>
<td><table border=0 width=400 align=center class='table table-striped table-dark'>
<tr>
<td colspan=2 ><h3><font color=red>Student detail</h3></font></td>
</tr>
<tr>
<tr>
<td>rollno</td>
<td><input type=number name=rollno value=$rec[rollno] </td>
</tr>
<tr>
<td>name</td>
<td><input type=text name=name value=$rec[name]></td>
</tr>
<tr>
<td>sem</td>
<td><input type=number name=sem value=$rec[sem]></td>
</tr>
<tr>
<td>regno</td>
<td><input type=number name=regno value=$rec[regno]></td>
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
<tr>
</table></td>
<td><table border=0 align=center width=400 class='table table-striped table-dark'>
<tr>
<td ><h4><font color=red>Total internaltheory mark</font></h4></td>
<td><input type=number name=tit value= $tit readonly ></td>
</tr>
<tr>
<tr>
<td>java</td>
<td><input type=number name=itjtxt value=$rec1[javait]   required min=0 max=$tit ></td>
</tr>
<tr>
<td>R.database</td>
<td><input type=number name=itdtxt value=$rec1[Databaseit] required min=0 max=$tit></td>
</tr><tr>
<td>php</td>
<td><input type=number name=itptxt value=$rec1[Phpit] required min=0 max=$tit></td>
</tr><tr>
<td>b.instrumentation</td>
<td><input type=number name=itbtxt value= $rec1[instrumentationit] required min=0 max=$tit</td>
</tr><tr>
<td>economy</td>
<td><input type=number name=itetxt value=$rec1[economyit] required min=0 max=$tit ></td>
</tr>
<tr>
<td>soil</td>
<td><input type=number name=itstxt value=$rec1[soilit] required min=0 max=$tit></td>
</tr>
<tr>
<td>extenshion</td>
<td><input type=number name=itxtxt value=$rec1[extenshionit] required min=0 max=$tit> </td>
</tr>
<td>systemanalis </td>
<td><input type=number name=itytxt value= $rec1[systemanalisit] > </td>
</tr>

</tr>
</table></td>

<td><table border=0 align=center width=400 class='table table-striped table-dark'>
<tr>
<td ><h4><font color=red>Total internalprac mark</font ></h4></td>
<td><input type=number name=tip value=$tip readonly> </td>
</tr>
<tr>
<tr>
<td>java</td>
<td><input type=number name=ipjtxt value=$rec2[Javaip]  required  min=0 max=$tip></td>
</tr>
<tr>
<td>R.database</td>
<td><input type=number name=ipdtxt value=$rec2[databaseip] required  min=0 max=$tip></td>
</tr><tr>
<td>php</td>
<td><input type=number name=ipptxt  value=$rec2[phpip] required  min=0 max=$tip></td>
</tr><tr>
<td>b.instrumentation</td>
<td><input type=number name=ipbtxt  value=$rec2[instrumentationip] required  min=0 max=$tip></td>
</tr><tr>
<td>economy</td>
<td><input type=number name=ipetxt value=$rec2[economyip] required  min=0 max=$tip></td>
</tr>
<tr>
<td>soil</td>
<td><input type=number name=ipstxt value=$rec2[soilip] required  min=0 max=$tip></td>
</tr>
<tr>
<td>extenshion</td>
<td><input type=number name=ipxtxt value=$rec2[extenshionip] required  min=0 max=$tip> </td>
</tr>
<td>systemanalis </td>
<td><input type=number name=ipytxt value=$rec2[systemanalisip] required  min=0 max=$tip> </td>
</tr>

</table></td>
</tr>
<tr>
<td>
<table border=0 align=center width=400 class='table table-striped table-dark'>
<tr>
<td ><h4><font color=red>Total externaltheory marks</font></h4></td>
<td><input type=number name=tet value=$tet readonly></td>
</tr>
<tr>
<tr>
<td>java</td>
<td><input type=number name=etjtxt value=$rec3[javaet] required  min=0 max=$tet></td>
</tr>
<tr>
<td>R.database</td>
<td><input type=number name=etdtxt value=$rec3[databaseet] required  min=0 max=$tet></td>
</tr><tr>
<td>php</td>
<td><input type=number name=etptxt value=$rec3[phpet] required  min=0 max=$tet></td>
</tr><tr>
<td>b.instrumentation</td>
<td><input type=number name=etbtxt value=$rec3[instrumentationet] required  min=0 max=$tet></td>
</tr><tr>
<td>economy</td>
<td><input type=number name=etetxt  value=$rec3[economyet] required  min=0 max=$tet></td>
</tr>
<tr>
<td>soil</td>
<td><input type=number name=etstxt value=$rec3[soilet] required  min=0 max=$tet></td>
</tr>
<tr>
<td>extenshion</td>
<td><input type=number name=etxtxt value=$rec3[extenshionet] required  min=0 max=$tet></td>
</tr>
<td>systemanalis </td>
<td><input type=number name=etytxt value=$rec3[systemanaliset] required  min=0 max=$tet></td>
</tr>
</table></td>
<td >

<table border=0 align=center width=400 class='table table-striped table-dark'>
<tr>
<td ><h4><font color=red>Total externalprac mark</h4></font></td>
<td><input type=number name=tep value=$rec4[tep]  readonly></td>
</tr>
<tr>
<tr>
<td>java</td>
<td><input type=number name=epjtxt value=$rec4[javaep] required  min=0 max=$tep ></td>
</tr>
<tr>
<td>R.database</td>
<td><input type=number name=epdtxt value=$rec4[databaseep] required  min=0 max=$tep ></td>
</tr><tr>
<td>php</td>
<td><input type=number name=epptxt value=$rec4[phpep] required  min=0 max=$tep ></td>
</tr><tr>
<td>b.instrumentation</td>
<td><input type=number name=epbtxt value= $rec4[instrumentationep] required  min=0 max=$tep ></td>
</tr><tr>
<td>economy</td>
<td><input type=number name=epetxt value=$rec4[economyep] required  min=0 max=$tep  ></td>
</tr>
<tr>
<td>soil</td>
<td><input type=number name=epstxt value=$rec4[soilep] required  min=0 max=$tep ></td>
</tr>
<tr>
<td>extenshion</td>
<td><input type=number name=epxtxt  value=$rec4[extenshionep] required  min=0 max=$tep ></td>
</tr>
<tr>
<td>systemanalis </td>
<td><input type=number name=epytxt  value=$rec4[systemanalisep]  required  min=0 max=$tep ></td>
</tr>
</table>
<td>
<table border=1 class='table table-striped table-dark'>
<th><font color=red>subject</font></th><th><font color=red>theory credit</font></th><th><font color=red>practical credit</font></th>
<tr>
<td>java</td>
<td><input type=number name=jtc value=2></td>
<td><input type=number name=jpc value=1></td>
</tr>
<tr>
<td>Rdbms</td>
<td><input type=number name=rtc value=2></td>
<td><input type=number name=rpc value=1></td>
</tr>
<tr>
<td>php</td>
<td><input type=number name=ptc value=2></td>
<td><input type=number name=ppc value=1></td>
</tr>
<tr>
<td>binstrumention</td>
<td><input type=number name=btc value=2></td>
<td><input type=number name=bpc value=1></td>
</tr>
<tr>
<td>economy</td>
<td><input type=number name=etc value=2></td>
<td><input type=number name=epc value=0></td>
</tr>
<tr>
<td>soil science</td>
<td><input type=number name=stc value=2></td>
<td><input type=number name=spc value=1></td>
</tr>
<tr>
<td>a.extenshion</td>
<td><input type=number name=extc value=1></td>
<td><input type=number name=expc value=1></td>
</tr>
<tr>
<td>system analisi</td>
<td><input type=number name=ytc value=2></td>
<td><input type=number name=ypc value=1></td>
</tr>


</table>
</td>
</td>
</tr>
<td colspan=3 align=center><input type=submit name=sub value=submit >
<a href='qf.php'><input type=button name=btn1 value=back></a> </td>
</table>

</form>";

 include "f2.php";
?>
