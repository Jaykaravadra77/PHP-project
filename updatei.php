<?php
include "chkdata.php";
session_start();
include "cf.php";

$name=$_POST['name'];
$roll=$_POST['rollno'];
$sem=$_POST['sem'];
$reg=$_POST['regno'];
$qry="update stud_data set name='$name',rollno=$roll,sem=$sem,regno=$reg where rollno=$roll";
$rs=mysqli_query($con,$qry);



$javait=$_POST['itjtxt'];
$rdbmsit=$_POST['itdtxt'];
$phpit=$_POST['itptxt'];
$basicit=$_POST['itbtxt'];
$economyit=$_POST['itetxt'];
$soilit=$_POST['itstxt'];
$extenshionit=$_POST['itxtxt'];
$systemit=$_POST['itytxt'];


$javaip=$_POST['ipjtxt'];
$rdbmsip=$_POST['ipdtxt'];
$phpip=$_POST['ipptxt'];
$basicip=$_POST['ipbtxt'];
$economyip=$_POST['ipetxt'];
$soilip=$_POST['ipstxt'];
$extenshionip=$_POST['ipxtxt'];
$systemip=$_POST['ipytxt'];


$javaet=$_POST['etjtxt'];
$rdbmset=$_POST['etdtxt'];
$phpet=$_POST['etptxt'];
$basicet=$_POST['etbtxt'];
$economyet=$_POST['etetxt'];
$soilet=$_POST['etstxt'];
$extenshionet=$_POST['etxtxt'];
$systemet=$_POST['etytxt'];

$javaep=$_POST['epjtxt'];
$rdbmsep=$_POST['epdtxt'];
$phpep=$_POST['epptxt'];
$basicep=$_POST['epbtxt'];
$economyep=$_POST['epetxt'];
$soilep=$_POST['epstxt'];
$extenshionep=$_POST['epxtxt'];
$systemep=$_POST['epytxt'];

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

$tit=$_POST['tit'];
$tip=$_POST['tip'];
$tet=$_POST['tet'];
$tep=$_POST['tep'];
$tt=$tit+$tet;
$tp=$tip+$tep;


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
 $res="pass";
}
else
 $res="fail";
 
 $roll=$_SESSION['uid'];
 $q="select * from stud_data where rollno=$roll";
 $r=mysqli_query($con,$q);
 $rec=mysqli_fetch_assoc($r);
  $srno=$rec['srno'];
 
 $it1="update tempit set javait=$javait,Databaseit=$rdbmsit,Phpit=$phpit,instrumentationit=$basicit,economyit=$economyit,
  soilit=$soilit,extenshionit=$extenshionit,systemanalisit=$systemit,tit=$tit where rollno=$roll";
  
  $r1=mysqli_query($con,$it1);
  if($r1)
  {
  }else mysqli_error($con);
 
 echo "<br>";
 $it2="update tempip set Javaip=$javaip,databaseip=$rdbmsip,phpip=$phpip,instrumentationip=$basicip,economyip=$economyip,
  soilip=$soilip,extenshionip=$extenshionip,systemanalisip=$systemip,tip=$tip where rollno=$roll";

	
  $r2=mysqli_query($con,$it2);
  if($r2)
  {
  }else mysqli_error($con);
  
  $it3="update tempet set javaet=$javaet,databaseet=$rdbmset,phpet=$phpet,instrumentationet=$basicet,economyet=$economyet,
  soilet=$soilet,extenshionet=$extenshionet,systemanaliset=$systemet,tet=$tet where rollno=$roll";


  $r3=mysqli_query($con,$it3);
 

  if($r3)
  {
  }else mysqli_error($con);
  
  $it4="update tempep set javaep=$javaep,databaseep=$rdbmsep,phpep=$phpep,instrumentationep=$basicep,economyep=$economyep,
  soilep=$soilep,extenshionep=$extenshionep,systemanalisep=$systemep,tep=$tep where rollno=$roll";
  $r4=mysqli_query($con,$it4);
  if($r4)
  {
  }else mysqli_error($con);
  
  
  
  
  if($javagp>=5 && $rdbmsgp>=5 && $phpgp>=5 && $basicgp>=5 && $economygp>=5 && $soilgp>=5 && $extenshiongp>=5 &&$systemgp>=5)
{
	$totalgp=($javagp+$rdbmsgp+$phpgp+$basicgp+$economygp+$soilgp+$extenshiongp+$systemgp)/8;
   if($totalgp>=7.5)	
    $res="distinction";
else 
   if($totalgp>=6.5)
	 $res="firstclass";
 else 
   if($totalgp>=5.5)
	 $res="secondclass";
 else
	 if($totalgp>=5)
     $res="pass";
}
else
 $res="fail";
  
  

$qry="update stud_result set javagp=$javagp,rdbmsgp=$rdbmsgp,phpgp=$phpgp,basicgp=$basicgp,
       economygp=$economygp,soilgp=$soilgp,extenshiongp=$extenshiongp,systemgp=$systemgp,
	   totalgp=$totalgp,result='$res' where srno=$srno";
	



$rs=mysqli_query($con,$qry);

if($rs)
{
 header("location:qf.php");	
}

