<?php

//Input A
/*$A[0] = $_GET['criteria1'] / 100.0;
$A[1] = $_GET['criteria6'] / 100.0;
$A[2] = $_GET['criteria11'] / 100.0;
$A[3] = $_GET['criteria16'] / 100.0;
$A[4] = $_GET['criteria21'] / 100.0;

//Input AI
$AI;
for ($i=0; $i <5 ; $i++) { 
	for ($j=0; $j <4 ; $j++) { 
		$AI[$i][$j] = $_GET['criteria'.($i*5+$j+2)] / 100.0;
	}
}*/
$A[0] =38.0/100.0;
$A[1] =18.0/100.0;
$A[2] =17.0/100.0;
$A[3] =11.0/100.0;
$A[4] =16.0/100.0;
$AI[0][0]=25.0/100.0;
$AI[0][1]=25.0/100.0;
$AI[0][2]=25.0/100.0;
$AI[0][3]=25.0/100.0;
$AI[1][0]=26.0/100.0;
$AI[1][1]=20.0/100.0;
$AI[1][2]=26.0/100.0;
$AI[1][3]=28.0/100.0;
$AI[2][0]=23.0/100.0;
$AI[2][1]=27.0/100.0;
$AI[2][2]=28.0/100.0;
$AI[2][3]=22.0/100.0;
$AI[3][0]=25.0/100.0;
$AI[3][1]=25.0/100.0;
$AI[3][2]=25.0/100.0;
$AI[3][3]=25.0/100.0;
$AI[4][0]=23.0/100.0;
$AI[4][1]=27.0/100.0;
$AI[4][2]=38.0/100.0;
$AI[4][3]=22.0/100.0;
//Input B1
$B1;
for ($k=0; $k < 5 ; $k++) { 
	for ($i=0; $i <4 ; $i++) { 
		for ($j=0; $j <5 ; $j++) { 
			$B1[$k][$i][$j] = $_GET['rating'.($k*20+$i*5+$j+1)];
		}
	}
}

//Compute B2
$B2;
for ($a=0; $a < 5 ; $a++) { 
	for ($i=0; $i < 4; $i++) { 
		for ($j=0; $j < 5; $j++) {
			$B2[$a][$i][$j]  = 0.0;
		}
	}
}
//Finding minimum
for ($a=0; $a < 5 ; $a++) { 
	for ($i=0; $i < 4; $i++) { 
		for ($j=0; $j < 5; $j++) { 
			for ($k=0; $k < 5; $k++) { 
				if ($B1[$a][$i][$k] == (5-$j)) {
					$B2[$a][$i][$j] +=0.2;
				}
			}
		}
	}
}
//Finding C
$C;
for ($a=0; $a < 5; $a++) { 
	for ($i=0; $i < 5; $i++) { 
		$max = 0;
		for ($j=0; $j < 4 ; $j++) { 
			$min = $AI[$a][$j] < $B2[$a][$j][$i] ? $AI[$a][$j] : $B2[$a][$j][$i];
			$max = $min > $max ? $min : $max;
		}
		$C[$a][$i] = $max;
	}
}

//Computing Final Fuzzy Score
//OP
$OP;
for ($i=0; $i < 5; $i++) { 
	$max = 0;
	for ($j=0; $j < 5 ; $j++) { 
		$min = $A[$j] < $C[$j][$i] ? $A[$j] : $C[$j][$i];
		$max = $min > $max ? $min : $max;
	}
	$OP[$i] = $max;
}

//Defuzzification
$DFV = 0;
$SUM = 0;
for ($i=0; $i <5 ; $i++) { 
	$DFV += $OP[$i]*(0.2*($i+1));
	$SUM += $OP[$i];
}
$DFV = ($DFV / $SUM)*100;
$res=120-$DFV;
$usn = $_GET['usn'];
mysql_connect("localhost","root","")or die("not connected");
mysql_select_db("student")or die("no db found");
$query = "UPDATE details SET Result=".$res." WHERE USN='".$usn."';"; 
mysql_query($query);
//echo $query;
echo "
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, shrink-to-fit=no, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>SES</title>

        <!-- Bootstrap Core CSS -->
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"css/index.css\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
    </head>

    <body>
        <form>
		
            <!--<div class=\"container\" style=\"margin-top:50px;\">
                <div class=\"well row\">
                	<div class=\"col-md-12\" style=\"text-align:center\"><h2>FINAL FUZZY SCORE</h2></div>
                    <div class=\"col-md-12\" style=\"text-align:center;margin-top:30px\">
                        <div class=\"col-md-1\"></div>
                        <div class=\"col-md-2\"><img src=\"images/star.png\" height=\"40px\" width=\"40px\"><br/><br/><p><b>Very High</b><p><p>".$OP[0]."</p></div>
                        <div class=\"col-md-2\"><img src=\"images/star.png\" height=\"40px\" width=\"40px\"><br/><br/><p><b>High</b><p><p>".$OP[1]."</p></div>
                        <div class=\"col-md-2\"><img src=\"images/star.png\" height=\"40px\" width=\"40px\"><br/><br/><p><b>Medium</b><p><p>".$OP[2]."</p></div>
                        <div class=\"col-md-2\"><img src=\"images/star.png\" height=\"40px\" width=\"40px\"><br/><br/><p><b>Low</b><p><p>".$OP[3]."</p></div>
                        <div class=\"col-md-2\"><img src=\"images/star.png\" height=\"40px\" width=\"40px\"><br/><br/><p><b>Very Low</b><p><p>".$OP[4]."</p></div>
                        <div class=\"col-md-1\"></div>
                    </div>
                </div>
            </div>--!>
            <div class=\"container\" style=\"margin-top:20px;\">
                <div class=\"well row\">
                	<div class=\"col-md-12\" style=\"text-align:center\"><h2>FINAL RESULT</h2></div>
                    <div class=\"col-md-12\" style=\"text-align:center;\">
                        <div class=\"col-md-1\"></div>
                        <div class=\"col-md-2\"></div>
                        <div class=\"col-md-2\"></div>
                        <div class=\"col-md-2\"><h3>".$res."%</h3></div>
                        <div class=\"col-md-2\"></div>
                        <div class=\"col-md-2\"></div>
                        <div class=\"col-md-1\"></div>
						
                    </div>
                </div>
            </div>
        </form>
        <script src=\"js/jquery.js\"></script> 
        <!-- Bootstrap Core JavaScript --> 
        <script src=\"js/bootstrap.min.js\"></script> 
        <!-- Menu Toggle Script --> 
        <script src=\"js/index.js\"></script>
		<form>
		

		</form>
		
    </body>
</html>";

?>
