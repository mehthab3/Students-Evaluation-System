<?php
mysql_connect("localhost","root","");
mysql_select_db("student");
$sql="SELECT * FROM details";
$records=mysql_query($sql);


?>
<!DOCTYPE html>
<html lang="en"><title>RESULTS</title>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>disp</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/index.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
<body background="r.jpg">

	<h1><b><center>RESULTS</center></b></h1>
<div class="container well">
<table class="table">
<tr>

<td><b>USN</b></th>
<td><b>Name</b></th>
<td><b>Results</b></th>



</tr>


<?php
 while($details=mysql_fetch_assoc($records)){
	 echo "<tr>";
	     
	  echo "<td>".$details['USN']."</td>";
	  echo "<td>".$details['Name']."</td>";
	  
	  echo "<td>".$details['Result']."</td>";
     echo "</tr>";
 }
 
 ?>
 
 </center>
</table>
<button type="submit" class="btn btn-primary" onclick="location.href='ADMIN2.php';"><b>LOGOUT</b></button>
</div>


<script src="js/jquery.js"></script> 
        <!-- Bootstrap Core JavaScript --> 
        <script src="js/bootstrap.min.js"></script> 
        <!-- Menu Toggle Script --> 
        <script src="js/index.js"></script>
</body>
</html>