<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beyond Recruit</title>

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

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Beyond Recruit</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <!-- /.dropdown -->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li class="divider"></li>
							<form role="form" action="Logout.php" method="POST">
                        <li><button name='submit'type='submit'><i class="fa fa-sign-out fa-fw"></i> Logout</button>
                        </li>
						</form>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            
                            <!-- /input-group -->
                        </li>
                       
                        <li>
                            <a href="jobs.php"><i class="fa fa-bar-chart-o fa-fw"></i> jobs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addjob.php">Add job</a>
                                </li>
                                <li>
                                    <a href="Jobs.php">View Job</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="Applicants2.php"><i class="fa fa-edit fa-fw"></i>Applicants</a>
                        </li>
                       
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Test<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Add Test</a>
                                </li>
                                <li>
                                    <a href="#">Update Test</a>
                                </li>

                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Results <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="create result">create result</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Job</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <form role='form' action="include/signup.inc.php" method="POST">								
                                <div class="form-group">
                                    <label>Job ID</label>
                                    <input class="form-control" placeholder="Job ID" name="job_id" type="job_id" autofocus>
                                    <p class="help-block">Example 123456</p>
                                </div>
                                <div class="form-group">
                                    <label>Job title</label>
                                    <input class="form-control" placeholder="Job title" name="job_title" type="job_title" autofocus>
                                </div>
								<div class="form-group">
                                    <label>Job Description</label>
                                    <textarea class="form-control" rows="6" placeholder="Job Description" name="job_dis" type="job_dis" autofocus></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <input class="form-control" placeholder="Category" name="job_cat" type="job_cat" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input class="form-control" placeholder="Company Name" name="company" type="company" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Annual Salary</label>
                                    <input class="form-control" placeholder="Annual Salary" name="salary" type="salary" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <input class="form-control" placeholder="Location" name="Location" type="Location" autofocus>
                                </div>
								 <div class="form-group">
                                    <label>Prefered salary</label>
                                    <input class="form-control" placeholder="Prefered_salary" name="Prefered_salary" type="Prefered_salary" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Experience</label>
                                    <input class="form-control" placeholder="Experience" name="Experience" type="Experience" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Work Type</label>
                                    <input class="form-control" placeholder="Work Type" name="Work_Type" type="Work_Type" autofocus>
                                </div>    
								<div class="form-group">
									<button class="btn btn-primary" type="submit" name="submit">Add Job</button>
								</div>
							</form>
							<div class="form-group">
                                    <?php
										if(!isset($_GET['addjob']))
										{
											exit();
										}	 
										else
										{
											$signupCheck = $_GET['addjob'];
											if($signupCheck == "empty")
												{
													echo "<p class='text-danger'> You did not fill in all fields</p>";
													exit();
												}
												elseif($signupCheck == "Job_id_present")
												{
													echo "<p class='text-danger'> Job id is already present enter new Job id </p>";
													exit();
												}	
												elseif($signupCheck == "Success")
												{
													echo "<p class='text-success'> Job has been created successfully </p>";
													exit();
												}
										}
									?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->      
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script>
        $(function(){
                    $('[data-toggle="tooltip"]').tooltip()
                })
    </script>

</body>

</html>
