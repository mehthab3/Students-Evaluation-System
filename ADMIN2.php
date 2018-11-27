<?php

$user = 'admin';
$pass = '12345';

if (!(($_POST["uname"] == $user) && ($_POST["psw"] == $pass))){
	header("Location:./adminlogin.html");
}
	
echo <<< EOT
<!DOCTYPE html>
<html>
<title>ADMIN</title>
<style>
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.add {
    width: 30%;
    border-radius: 30%;
}
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
.button1 {border-radius:12px;}



</style>

<body background='r.jpg'>
</body>
<div class="imgcontainer">
    <img src="std.png" alt="add" class="add">
</div>
<center></br></br>
<input type="button" class="button button1" value="ADD STUDENT DETAILS" onclick="location.href='std.php';" ></BR>
<input type="button"  class="button button1" value="VIEW RESULT" onclick="location.href='result.php';"></button><br/>
<input type="button"  class="button button1" value="BACK" onclick="location.href='adminlogin.html';"></button><br/></center>

 </form>
 </html>
EOT;

?>
