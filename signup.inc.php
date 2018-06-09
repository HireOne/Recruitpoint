<?php
session_start();
if(isset($_POST['submit']))
{

	include_once "dbh.inc.php";
	$job_id = mysqli_real_escape_string($conn,$_POST['job_id']);
	$job_title = mysqli_real_escape_string($conn,$_POST['job_title']);
	$job_dis = mysqli_real_escape_string($conn, $_POST['job_dis']);
	$job_cat = mysqli_real_escape_string($conn,$_POST['job_cat']);			
	$company = mysqli_real_escape_string($conn, $_POST['company']);
	$salary = mysqli_real_escape_string($conn,$_POST['salary']);
	$Location = mysqli_real_escape_string($conn,$_POST['Location']);
	$Prefered_salary = mysqli_real_escape_string($conn,$_POST['Prefered_salary']);
	$Experience = mysqli_real_escape_string($conn, $_POST['Experience']);
	$Work_Type = mysqli_real_escape_string($conn,$_POST['Work_Type']);
	
	//Error handlers
	//Check for empty fields
	if(empty($job_id) || empty($job_title) || empty($job_dis) || empty($job_cat) || empty($company) || empty($salary) || empty($Location) || empty($Experience) || empty($Work_Type))
	{
		header("Location: ../addjob.php?addjob=empty");
		exit();
	}
	else
	{
		$sql = "Select job_id FROM job_detail WHERE job_id='$job_id'";
		$Result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($Result);
		if($resultCheck > 0)
		{
		
			header("Location: .pages/addjob.php?addjob=Job_id_present");
	        exit();
		}
		else
		{
			$sql ="INSERT INTO job_detail (job_id,job_title,job_dis,job_cat,company,salary,Location,Prefered_salary,Experience,Work_Type) VALUES ('$job_id','$job_title','$job_dis','$job_cat','$company','$salary','$Location','$Prefered_salary','$Experience','$Work_Type');";
			mysqli_query($conn,$sql);
			header("Location: ../addjob.php?addjob=Success");
	        exit();
		}
	}
}
else
{
	header("Location: ../addjob.php");
	exit();
}
?>