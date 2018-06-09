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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
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
                                    <a href="jobs.php">View jobs</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="applicants.html"><i class="fa fa-edit fa-fw"></i>Applicants</a>
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
                        <h1 class="page-header">View Jobs</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
					

                        <!-- /.panel-heading -->
						<thead>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                </thead>
								<tbody>
											    <?php
											  
                             $dbservername = "localhost";
                              $dbusername = "root";
                              $dbpassword = "";
                              $dbname = "loginsystem";
							  $viewjobsTb1 ="candidate";
	                          // Create connection
                              $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname) or die('unable to connect');

                              // Check connection
                              if (!$conn) {
                              die("Connection failed: " . mysqli_connect_error());
                               }
                                    ;
                                   $query = "SELECT * FROM candidate";
                                         $result = mysqli_query($conn,$query);
											  

   
								
					      while($row = mysqli_fetch_assoc($result)){
									echo ""
									echo "<td>"."<strong>"."Job ID  "."</strong>"."<br>".$row['job_id']."<br>";
									echo "<strong>"."First Name  "."</strong>"."<br>".$row['FName']."<br>"."<br>"."<br>";
									echo "<strong>"."Last Name "."</strong>"."<br>"."<br>"."<br>".$row['LName']."<br>"."<br>";
									echo "<strong>"."Qualification  "."</strong>"."<br>".$row['Qualification']."<br>";
									echo "<strong>"."Experience  "."</strong>"."<br>".$row['Experience']."<br>";
									echo "<strong>"."Email  "."</strong>"."<br>".$row['Email']."<br>";
									echo "<strong>"."Contact Number  "."</strong>"."<br>".$row['Phone_no']."<br>";
									echo "<strong>"."Gender  "."</strong>"."<br>".$row['Gender']."<br>";
									echo "<strong>"."Address  "."</strong>"."<br>".$row['Address']."<br>"."</td>";            
							
						  }
							?>
      
                                        
                                   
							                  
                                </tbody>
                            </table>
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
