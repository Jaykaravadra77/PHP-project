
<?php
include "h2.php";
session_start();
?>
<table align=center>
<html lang="en">
<form action="">
<tr> 
<td> &nbsp;</td>
</tr>
<tr> 
<td> &nbsp;</td>
</tr>
<tr> 

</tr>

<td><select name="class" onchange="showclass(this.value)">
<option value="">Select a class:</option>
<option value="Distinction"><b style="color:blue">distinction</b></option>
<option value="Firstclass ">firstclass</option>
<option value="Secondclass ">secondclass</option>
<option value="Pass">Pass</option>
<option value="Fail">Fail</option>
</select><td>
</tr> 
</table>
<div id="txtHint"></div>
</form>
<script>
function showclass(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getUsers.php?q="+str, true);
  xhttp.send();
}
</script>
<table align=center>
<tr>
<td><a href=qf.php><input type=button name=s1 value="Back"></a></td>
</tr>
</table>
</body>

</html>
<?php include"f1.php";?>
