<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SES</title>

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

    <body>
        <form action="ses.php">
            <div class="container">
                <h2><center>Student Evaluation System</center></h2><br>
                <div class="well col-md-12">
                    <div class="form-group">
			<input name="usn" class="form-control" id="inputdefault" type="text" value="<?php echo $_GET['usn']?>"/>
                      
                    </div>
                </div>
                <div class="well col-md-12">
                    <div class="form-group">
                        <table class="table">
                            <tr>
                                <th>Sub-criteria</th>
                                <th>M1</th>
                                <th>M2</th>
                                <th>M3</th>
                                <th>M4</th>
                                <th>M5</th>
                            </tr>
                            <tr><td><b>Academics</b></td></tr>
                            <tr>
                                <td>Subject 1</td>
                                <td><input name="rating1" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating2" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating3" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating4" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating5" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Subject 2</td>
                                <td><input name="rating6" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating7" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating8" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating9" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating10" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Subject 3</td>
                                <td><input name="rating11" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating12" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating13" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating14" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating15" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Subject 4</td>
                                <td><input name="rating16" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating17" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating18" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating19" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating20" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr><td><b>General Skills </b></td></tr>
                            <tr>
                                <td>Leadership Skills</td>
                                <td><input name="rating21" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating22" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating23" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating24" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating25" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Motivational Capability</td>
                                <td><input name="rating26" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating27" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating28" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating29" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating30" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Team Work</td>
                                <td><input name="rating31" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating32" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating33" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating34" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating35" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Problem Solving</td>
                                <td><input name="rating36" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating37" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating38" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating39" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating40" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr><td><b>Communication Skills</b></td></tr>
                            <tr>
                                <td>Verbal Ability</td>
                                <td><input name="rating41" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating42" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating43" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating44" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating45" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Language Fluency</td>
                                <td><input name="rating46" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating47" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating48" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating49" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating50" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Interaction with Other Peaple</td>
                                <td><input name="rating51" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating52" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating53" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating54" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating55" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Body Language</td>
                                <td><input name="rating56" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating57" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating58" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating59" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating60" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr><td><b>Attendance</b></td></tr>
                            <tr>
                                <td>Subject 1</td>
                                <td><input name="rating61" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating62" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating63" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating64" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating65" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Subject 2</td>
                                <td><input name="rating66" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating67" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating68" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating69" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating70" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Subject 3</td>
                                <td><input name="rating71" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating72" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating73" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating74" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating75" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Subject 4</td>
                                <td><input name="rating76" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating77" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating78" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating79" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating80" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr><td><b>Other Skills</b></td></tr>
                            <tr>
                                <td>Listening Skills</td>
                                <td><input name="rating81" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating82" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating83" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating84" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating85" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Creative & Imagination</td>
                                <td><input name="rating86" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating87" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating88" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating89" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating90" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Technological Awareness</td>
                                <td><input name="rating91" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating92" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating93" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating94" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating95" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                            <tr>
                                <td>Social Respocibility</td>
	
                                <td><input name="rating96" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating97" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating98" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating99" class="form-control" id="inputdefault" type="text" required></td>
                                <td><input name="rating100" class="form-control" id="inputdefault" type="text" required></td>
                            </tr>
                        </table>
						<center>
						<input type="button" class="btn btn-primary" value="BACK" onclick="location.href='newdis.php';" style="float:left;" >
                        <button type="submit" class="btn btn-primary"><b>SUBMIT</b></button>
						<button type="reset" class="btn btn-primary" value="reset"><b>RESET</b></button>
						
						</center>
                    </div>
                </div>
            </div>
        </form>
        <script src="js/jquery.js"></script> 
        <!-- Bootstrap Core JavaScript --> 
        <script src="js/bootstrap.min.js"></script> 
        <!-- Menu Toggle Script --> 
        <script src="js/index.js"></script>
    </body>
</html>
