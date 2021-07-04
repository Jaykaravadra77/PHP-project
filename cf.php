<?php
$con=mysqli_connect("localhost","root","");
if($con)
{
  if(mysqli_select_db($con,"stud_data"))
  {
	//echo "connect database";	
  }else
	  echo"prb in connection";
}
else
	echo"problem in connection";




?>