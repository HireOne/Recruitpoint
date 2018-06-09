                           
						<?php
											  
                             $dbservername = "localhost";
                              $dbusername = "root";
                              $dbpassword = "";
                              $dbname = "loginsystem";
							  $viewjobsTb1 ="job_detail";
							
                              // Create connection
                              $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname) or die('unable to connect');
										   						 
								//print_r($_POST);
								$jobid = $_POST['id'];
								$jobtitle =$_POST['title'];
								$category =$_POST['category'];
								$jobdescription =$_POST['description'];
								$companyname =$_POST['company_name'];
								$annualsalary =$_POST['salary'];
								$location =$_POST['location'];
								$exprience =$_POST['exp'];
								$worktype =$_POST['work_type'];
							     	
								$query = "DELETE FROM job_detail where job_id = '$jobid' ";
								//echo $query;
								$data = mysqli_query($conn, $query);
								if($data)
								{
										header('Location: jobs.php?addjob=update_Successful'); 
									exit();
								}
								else
					            {
								    echo "not updated";
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
