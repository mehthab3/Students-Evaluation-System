<?php
mysql_connect("localhost","root","");
mysql_select_db("student");
$sql="SELECT Name,USN FROM details";
$records=mysql_query($sql);


?>

<html>
<head><title>Student Details</title></head>
<style>
	input[type=text], input[type=password] {
    width: 47%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	}
	</style>
<body background="r.jpg">
<center>   
<table class="box" border="5" width="150" height="200">
<tr>

<td><b><center>USN</center></b></th>
<td><b><center>Name</center></b></th>


</tr>


<?php
 while($details=mysql_fetch_assoc($records)){
	 echo "<tr>";
	     
	  echo "<td>".$details['USN']."</td>";
	  echo "<td>".$details['Name']."</td>";
	  
     echo "</tr>";
 }
 ?>
 </center>
</table>
<input type="text" placeholder="Enter USN" name="usn" align="right" width="" height="" required><br>


<button type="submit" >EVALUATE</button>
</body>
<style>
<!--.box{
	
	position:fixed;
	margin-left:60px;
	
	top:10%;
	left=50%;
}-->
</style>
</html>