<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php
if ( ! empty($_GET['id'])){
    $id = $_GET['id'];
}
?>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign-Up</h3>
                    </div>
					
                    <div class="panel-body">
                        <form role="form" action="include/Cand_Signup.inc.php?id=<?php echo $id;?>" method="POST">
								<div class="form-group">
                                  <input class="form-control" type='hidden' name="jobid" value="<?php echo $id;?>" placeholder="job_id">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" name="FName" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" name="LName" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <label>Latest Qualification</label>
                                    <input class="form-control" type="text" name="Qulif" placeholder="Qulif">
                                </div>
                                <div class="form-group">
                                    <label>Experience</label>
                                    <input class="form-control" type="text" name="Exp" placeholder="Exp">
                                </div>
                                <div class="form-group">
                                    <label>Email ID</label>
                                    <input class="form-control" type="text" name="Email" placeholder="Email-ID">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text" name="Phone_no" placeholder="Phone_no">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" type="text" name="Gender" placeholder="Gender">
                                        <option value="female">Female</option>                                        
                                        <option value="male">Male</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" type="text" name="Address" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label>Resume</label>
                                    <input type="file" class="form-control-file" name="file" placeholder="Resume" >   
                                </div>
								<div>
									<button class="btn btn-primary" type="submit" name="submit">Apply</button>
								</div>
                            </form>
                                <div class="checkbox">
                                    <?php
										if(!isset($_GET['login']))
										{
											exit();
										}	 
										else
										{
											$signupCheck = $_GET['login'];
											if($signupCheck == "empty")
												{
													echo "<p class='text-danger'> You did not fill in all fields</p>";
													exit();
												}
												elseif($signupCheck == "incorrect")
												{
													echo "<p class='text-danger'> Password did not match</p>";
													exit();
												}
												elseif($signupCheck == "sucess")
												{
													echo "<p class='text-danger'> Success applied</p>";
													exit();
												}													
										}
									?>
                                </div>
								
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


</body>

</html>
