
<?php
session_start();
include "chkdata.php";
include "cf.php";

$name=$_POST['name'];
$roll=$_POST['roll'];
$_SESSION['roll']=$roll;
$sem=$_POST['sem'];
$reg=$_POST['reg'];

$cr="select * from stud_data where rollno=$roll";
$rr=mysqli_query($con,$cr);
$rn=mysqli_num_rows($rr);
if($rn==1)
{
  $msg="Dublicate entry for Rollno $roll Re enter detail with diffrent rollno ";
   header("location:totali.php?err=$msg");
   die();
  
}
else
{
	$javait=$_POST['itjtxt'];
	$rdbmsit=$_POST['itdtxt'];
	$phpit=$_POST['itptxt'];
	$basicit=$_POST['itbtxt'];
	$economyit=$_POST['itetxt'];
	$soilit=$_POST['itstxt'];
	$extenshionit=$_POST['itxtxt'];
	$systemit=$_POST['itytxt'];

	$tit=$_POST['tit'];
	$tip=$_POST['tip'];
	$tet=$_POST['tet'];
	$tep=$_POST['tep'];
	$tt=$tit+$tet;
	$tp=$tip+$tep;

$it="insert into tempit values('$roll','$javait','$rdbmsit','$phpit','$basicit','$economyit','$soilit','$extenshionit','$systemit','$tit')";
$r1=mysqli_query($con,$it);
if($r1)
{
}else
{
  $it1="update tempit set javait=$javait,Databaseit=$rdbmsit,Phpit=$phpit,instrumentationit=$basicit,economyit=$economyit,
  soilit=$soilit,extenshionit=$extenshionit,systemanalisit=$systemit,tit=$tit where rollno=$roll";

  $r1=mysqli_query($con,$it1);
  if($r1)
  {
  }else mysqli_error($con);
}

 


$javaip=$_POST['ipjtxt'];
$rdbmsip=$_POST['ipdtxt'];
$phpip=$_POST['ipptxt'];
$basicip=$_POST['ipbtxt'];
$economyip=$_POST['ipetxt'];
$soilip=$_POST['ipstxt'];
$extenshionip=$_POST['ipxtxt'];
$systemip=$_POST['ipytxt'];


$it="insert into tempip values('$roll','$javaip','$rdbmsip','$phpip','$basicip','$economyip','$soilip','$extenshionip','$systemip','$tip')";
$r2=mysqli_query($con,$it);
if($r2)
{
}else
{
  $it1="update tempip set Javaip=$javaip,databaseip=$rdbmsip,phpip=$phpip,instrumentationip=$basicip,economyip=$economyip,
  soilip=$soilip,extenshionip=$extenshionip,systemanalisip=$systemip,tip=$tip where rollno=$roll";
  echo $it1;
  $r2=mysqli_query($con,$it1);
  if($r2)
  {
  }else mysqli_error($con);
}




$javaet=$_POST['etjtxt'];
$rdbmset=$_POST['etdtxt'];
$phpet=$_POST['etptxt'];
$basicet=$_POST['etbtxt'];
$economyet=$_POST['etetxt'];
$soilet=$_POST['etstxt'];
$extenshionet=$_POST['etxtxt'];
$systemet=$_POST['etytxt'];


$it="insert into tempet values('$roll','$javaet','$rdbmset','$phpet','$basicet','$economyet','$soilet','$extenshionet','$systemet','$tet')";
$r2=mysqli_query($con,$it);
if($r2)
{
}else
{
  $it1="update tempet set javaet=$javaet,databaseet=$rdbmset,phpet=$phpet,instrumentationet=$basicet,economyet=$economyet,
  soilet=$soilet,extenshionet=$extenshionet,systemanaliset=$systemet,tet='$tet' where rollno=$roll";
  $r2=mysqli_query($con,$it1);
  if($r2)
  {
  }else mysqli_error($con);
}





$javaep=$_POST['epjtxt'];
$rdbmsep=$_POST['epdtxt'];
$phpep=$_POST['epptxt'];
$basicep=$_POST['epbtxt'];
$economyep=$_POST['epetxt'];
$soilep=$_POST['epstxt'];
$extenshionep=$_POST['epxtxt'];
$systemep=$_POST['epytxt'];

$it="insert into tempep values('$roll','$javaep','$rdbmsep','$phpep','$basicep','$economyep','$soilep','$extenshionep','$systemep','$tep')";
$r2=mysqli_query($con,$it);
if($r2)
{
}else
{
  $it1="update tempep set javaep=$javaep,databaseep=$rdbmsep,phpep=$phpep,instrumentationep=$basicep,economyep=$economyep,
  soilep=$soilep,extenshionep=$extenshionep,systemanalisep=$systemep,tep=$tep where rollno=$roll";
  $r2=mysqli_query($con,$it1);
  if($r2)
  {
  }else mysqli_error($con);
}


$jtc=$_POST['jtc'];
$jpc=$_POST['jpc'];
$ptc=$_POST['ptc'];
$ppc=$_POST['ppc'];
$rtc=$_POST['rtc'];
$rpc=$_POST['rpc'];
$btc=$_POST['btc'];
$bpc=$_POST['bpc'];
$etc=$_POST['etc'];
$epc=$_POST['epc'];
$stc=$_POST['stc'];
$spc=$_POST['spc'];
$extc=$_POST['extc'];
$expc=$_POST['expc'];
$ytc=$_POST['ytc'];
$ypc=$_POST['ypc'];




$javatt=$javait+$javaet;
$javatp=$javaip+$javaep;

$rdbmstt=$rdbmsit+$rdbmset;
$rdbmstp=$rdbmsip+$rdbmsep;

$phptt=$phpit+$phpet;
$phptp=$phpip+$phpep;

$basictt=$basicit+$basicet;
$basictp=$basicip+$basicep;

$economytt=$economyit+$economyet;
$economytp=$economyip+$economyep;

$soiltt=$soilit+$soilet;
$soiltp=$soilip+$soilep;

$extenshiontt=$extenshionit+$extenshionet;
$extenshiontp=$extenshionip+$extenshionep;

$systemtt=$systemit+$systemet;
$systemtp=$systemip+$systemep;

$javagp=($javatt*$jtc+$javatp*$jpc)/($tt*$jtc+$tp*$jpc)*10;
$rdbmsgp=($rdbmstt*$rtc+$rdbmstp*$rpc)/($tt*$rtc+$tp*$rpc)*10;
$phpgp=($phptt*$ptc+$phptp*$ppc)/($tt*$ptc+$tp*$ppc)*10;
$basicgp=($basictt*$btc+$basictp*$bpc)/($tt*$btc+$tp*$bpc)*10;
$economygp=($economytt*$etc+$economytp*$epc)/($tt*$etc+$tp*$epc)*10;
$soilgp=($soiltt*$stc+$soiltp*$spc)/($tt*$stc+$tp*$spc)*10;
$extenshiongp=intval(($extenshiontt+$extc+$extenshiontp*$expc)/($tt*$extc+$tp*$expc)*10);
$systemgp=($systemtt*$ytc+$systemtp*$ypc)/($tt*$ytc+$tp*$ypc)*10;
$totalgp=($javagp+$rdbmsgp+$phpgp+$basicgp+$economygp+$soilgp+$extenshiongp+$systemgp)/8;

if($javagp>=5 && $rdbmsgp>=5 && $phpgp>=5 && $basicgp>=5 && $economygp>=5 && $soilgp>=5 && $extenshiongp>=5 &&$systemgp>=5)
{
	$totalgp=($javagp+$rdbmsgp+$phpgp+$basicgp+$economygp+$soilgp+$extenshiongp+$systemgp)/8;
   if($totalgp>=7.5)	
    $res="Distinction";
else 
   if($totalgp>=6.5)
	 $res="Firstclass";
 else 
   if($totalgp>=5.5)
	 $res="Secondclass";
 else
	 if($totalgp>=5)
     $res="Pass";
}
else
 $res="fail";
 
 



 $qry="insert into stud_data values('','$name','$roll','$sem','$reg')";


  $qry1="insert into stud_result values('',' $javagp','$rdbmsgp','$phpgp','$basicgp','$economygp',
'$soilgp','$extenshiongp','$systemgp','$totalgp','$res')";
 



$rs=mysqli_query($con,$qry);
$rs1=mysqli_query($con,$qry1);
if($rs)
{
  echo"succesfull";	
}
if($rs1)
{
  header("location:qf.php");	
}else
	echo mysqli_error($con);
}