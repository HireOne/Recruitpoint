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
                                       <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            
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
							  $viewjobsTb1 ="job_detail";
	                          $uid = $_GET['id'];
                              // Create connection
                              $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname) or die('unable to connect');

                              // Check connection
                              if (!$conn) {
                              die("Connection failed: " . mysqli_connect_error());
                               }
                                    ;
                                   $query = "SELECT * FROM job_detail where job_id='$uid'";
                                         $result = mysqli_query($conn,$query);
											  

   
								
					      while($row = mysqli_fetch_assoc($result)){
                       
									echo "<td>"."<strong>"."Job ID  "."</strong>"."<br>".$row['job_id']."<br>";
									echo "<strong>"."Job Title  "."</strong>"."<br>".$row['job_title']."<br>"."<br>"."<br>";
									echo "<strong>"."Job Discription  "."</strong>"."<br>"."<br>"."<br>".$row['job_dis']."<br>"."<br>";
									echo "<strong>"."Job Catagory  "."</strong>"."<br>".$row['job_cat']."<br>";
									echo "<strong>"."Job Company  "."</strong>"."<br>".$row['company']."<br>";
									echo "<strong>"."Job Salary  "."</strong>"."<br>".$row['salary']."<br>";
									echo "<strong>"."Job Location  "."</strong>"."<br>".$row['Location']."<br>";
									echo "<strong>"."Job Experience  "."</strong>"."<br>".$row['Experience']."<br>";
									echo "<strong>"."Job Work Type  "."</strong>"."<br>".$row['Work_Type']."<br>"."</td>";
							               
							
						  }
							?>
      <p align="right">
	  
										<button data-toggle="tooltip" class="btn btn-primary" data-placement="top" title="Apply Job"><span class="glyphicon glyphicon-pencil" onClick="window.location='Apply_job.php?id=<?php echo $row['job_id'];?>'"> Apply</span></button>
                                        
                                   
							                  
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
