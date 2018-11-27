<hmtl>
<head><title>Student data</title></head>
<body background="r.jpg">
<style>
.button{
	background-color:#008CBA;
	border:none;
	color:white;
	padding:10px 15px;
	text-align:cente;
	text-decoration:none;
	display:inline-block;
	font-size:16px;
	margin:2px 2px;
	cursor:pointer;
	
}
.button1 {border-radius:12px;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.r {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}
</style>
<form action="std.php"method="post">
 <div class="imgcontainer">
    <img src="rrrr.png" alt="r" class="r">
 </div>
<center><table border="3" width="500" height="300">
<tr>
<td colspan="5" align="center" bgcolor="grey"><strong><b><font size="6">Student Information</font></b></strong></td>
</tr>


  <tr>
    <td align="right"><font size="5">Name:</font></td><td><input type="text" name="name" size="35" required></td>
  </tr>
  <tr>
    <td align="right"><font size="5">USN:</font></td><td><input type="text" name="usn"  size="35" maxlength="10" required></td>
  </tr>
  <tr>
    <td align="right"><font size="5">Branch:</font></td><td><input type="text" name="branch" size="35" maxlength="3"required></td>
  </tr>
  <tr>
    <td align="right"><font size="5">Sem:</font></td><td><input type="text" name="sem" size="35" maxlength="1" required></td>
  </tr>
  <tr>
    <td align="right"><font size="5">College:</font></td><td><input type="text" name="college" size="35" required></td>
  </tr>
 <tr>
<td colspan="5" align="center"><input type="submit" class="button button1" name="submit" value="SUBMIT">
<button type="reset" class="button button1" value="reset"><b>RESET</b></button></td>
</tr>
 </table>
 </center>
 </br>
 </br>
  </br>
 </br>
  </br>
 </br>
  </br>
 </br>
 <button type="button" class="button button1" onclick="location.href='ADMIN2.php';" style="float:left;"><b>LOGOUT</b></button>
 </form>
 
</body>
</html>
 



<?php

mysql_connect("localhost","root","")or die("not connected");
mysql_select_db("student")or die("no db found");

if(isset($_POST['submit']))
{
 $Name=$_POST['name'];
 $USN=$_POST['usn'];
 $Branch=$_POST['branch'];
 $Sem=$_POST['sem'];
 $College=$_POST['college'];
 
 $query="insert into details(Name,USN,Branch,Sem,College)values('$Name','$USN','$Branch','$Sem','$College')";
if(mysql_query($query))
 {
	echo'<script type="text/javascript"> alert("succesfully entered"); </script>';
 }

}
?>