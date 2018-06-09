<?php

if(isset($_POST['submit']))
{

	include_once "dbh.inc.php";
	//$file = rand(1000,100000)."-".$_FILES['file']['name'];
    //$file_loc = $_FILES['file']['tmp_name'];
	//$file_size = $_FILES['file']['size'];
	//$file_type = $_FILES['file']['type'];
	//$folder="uploads/";
	$file = "kjasjdbjbsd";
	$jobid = $_GET['id'];
	$FName = mysqli_real_escape_string($conn,$_POST['FName']);
	$LName = mysqli_real_escape_string($conn,$_POST['LName']);
	$Qulif = mysqli_real_escape_string($conn,$_POST['Qulif']);			
	$Exp = mysqli_real_escape_string($conn, $_POST['Exp']);
	$Email = mysqli_real_escape_string($conn, $_POST['Email']);
	$Phoneno = mysqli_real_escape_string($conn,$_POST['Phone_no']);			
	$Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
	$Address = mysqli_real_escape_string($conn,$_POST['Address']);			
	//$Resume = mysqli_real_escape_string($conn,$Resume);
	move_uploaded_file($file_loc,$folder.$file);
	//Error handlers
	//Check for empty fields
	if(empty($jobid) || empty($LName) || empty($Email))
	{
		header("Location: ../Apply_job.php?signup=empty");
		exit();
	}
	//Check if input characters are valid
	if(!preg_match("/^[a-zA-Z]*$/", $FName))
	{
		header("Location: ../Apply_job.php?signup=First");
		exit();
	}
	if(!preg_match("/^[a-zA-Z]*$/", $LName))
	{
		header("Location: ../Apply_job.php?signup=Last");
		exit();
	}
	else
	{
		if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
		{
			header("Location: ../Apply_job.php?signup=Email");
		    exit();
		}
		else
		{
	
				$sql ="INSERT INTO candidate (job_id,FName,LName,Qualification,Experience,Email,Pnone_no,Gender,Address,Resume,Status) VALUES ('$jobid','$FName','$LName','$Qulif','$Exp','$Email','$Phoneno','$Gender','$Address','wjhebuwfb','1');";
				mysqli_query($conn,$sql);
				header("Location: ../Apply_job.php?signup=Success");
				exit();
			
		}
		
	}
}
else
{
	header("Location: ../Apply_job.php?signup=error1");
	exit();
}
?>