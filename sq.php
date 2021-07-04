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
<?php
include "chkdatas.php";
include "cf.php";
include "hs.php";

	$regno=$_SESSION['regno'];
	$qry="select stud_data.srno ,stud_data.name,stud_data.rollno,stud_data.sem,stud_data.regno, stud_result.javagp,stud_result.rdbmsgp,stud_result.phpgp,stud_result.basicgp, stud_result.economygp,stud_result.soilgp,stud_result.extenshiongp,stud_result.systemgp,stud_result.totalgp,stud_result.result
	from stud_data,stud_result where stud_data.srno=stud_result.srno AND stud_data.regno=$regno";



 $rs=mysqli_query($con,$qry);
 $rn=mysqli_num_rows($rs);
 $max=$rn;

 
   $rec=mysqli_fetch_assoc($rs);

    echo "<table border=2  align=center bordercolor=white class='table table-striped table-dark'>";
		echo"<tr>";
	echo "<td colspan=2 align=center '><font color=green><b><h5>Anand Agricultural Univercity</font></b></h5></td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td colspan=2 align=left  >";
	echo"<table border=0 width=200 >"; 
     echo "<tr>";
	    echo"<td ><font size=2>Rollno</font></td>";
       echo"<td ><font size=2>".$rec['rollno']."</font></td>";
      echo "</tr>";	
       echo "<tr>";		
      echo"<td ><font ><font size=2>Name</font></font></td>";	   
       echo"<td><font ><font size=2>".$rec['name']."</font></font></td>";	   
        echo "</tr>";	
      echo "<tr>";		
      echo"<td><font size=2>sem</font></td>";	   
       echo"<td><font size=2>".$rec['sem']."</font></td>";	   
        echo "</tr>";	 
     echo "<tr>";		
   echo"<td><font size=2>Regno</font></td>";	   
    echo"<td><font size=2>".$rec['regno']."</font></td>";	   	   
        echo "</tr>";	  		
     echo "</tr>";	
    echo "</table>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";		
      echo"<td><font size=2>Web devlopment using Java</font></td>";	   
       echo"<td><font size=2>".$rec['javagp']."<font></td>";	   
        echo "</tr>";
    echo "<tr>";		
      echo"<td><font size=2>Relational database</font></td>";	   
       echo"<td><font size=2>".$rec['rdbmsgp']."</font></td>";	   
        echo "</tr>";	
       echo "<tr>";		
      echo"<td> <font size=2>Web devlopment using php<font></td>";	   
       echo"<td><font size=2>".$rec['phpgp']."<font></td>";	   
        echo "</tr>";		
		echo "<tr>";		
      echo"<td><font size=2>Basic instrumentation</font></td>";	   
       echo"<td><font size=2>".$rec['basicgp']."</font></td>";	   
        echo "</tr>";
		echo "<tr>";		
      echo"<td><font size=2>Economy</font></td>";	   
       echo"<td><font size=2>".$rec['economygp']."<font></td>";	   
        echo "</tr>";
		echo "<tr>";		
      echo"<td><font size=2>Soilgp</font></td>";	   
       echo"<td><font size=2>".$rec['soilgp']."</font></td>";	   
        echo "</tr>";
		echo "<tr>";		
      echo"<td><font size=2>Agricultural Extenshion </font></td>";	   
       echo"<td><font size=2>".$rec['extenshiongp']."</font></td>";	   
        echo "</tr>";
		echo "<tr>";		
      echo"<td><font size=2>System analisis and desine</font></td>";	   
       echo"<td><font size=2>".$rec['systemgp']."</font></td>";	   
        echo "</tr>";
		echo "<tr>";		
      echo"<td><font size=2>TotalGp</font></td>";	   
       echo"<td><font size=2>".$rec['totalgp']."<font></td>";	   
        echo "</tr>";
		echo "<tr>";		
      echo"<td><font size=2>Result</font></td>";	   
       echo"<td><font size=2>".$rec['result']."</font></td>";	   
        echo "</tr>";
	  echo"</table>";
	  	echo"<table align=center>";
		echo"<tr>";
		echo "<p></p>";
		echo"</tr>";
		echo "<tr>";
		 echo"<td colspan=2 align=center><a href=search.php><input type=button name=btn1 value=Back> </a> </td>";
		 echo "</tr>";
	 echo"</table>";
	
include"f1.php";	 
?>
