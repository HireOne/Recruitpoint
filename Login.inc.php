<?php

if(empty($_SESSION)) // if the session not yet started 
   session_start();
if(isset($_POST['submit']))
{
	include_once "dbh.inc.php";
	$uid = mysqli_real_escape_string($conn, $_POST['EmailID']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pass']);
	if(empty($uid) || empty($pwd))
	{
		header("Location: ../login.php?login=empty");
		exit();
	}
	else
	{
		$hashedPwd = md5($pwd);
		$sql = "SELECT * FROM users WHERE Email='$uid' and User_pswd='$hashedPwd'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1)
		{
			header("Location: ../login.php?login=incorrect");
			exit();
		}
		else
		{
			if($row = mysqli_fetch_assoc($result))
			{
	
						//login user here
				$_SESSION['u_id'] = $row['user_id'];
				$_SESSION['u_fname'] = $row['FName'];
				$_SESSION['u_lname'] = $row['LName'];
				$_SESSION['u_email'] = $row['Email'];
				header("location: ../jobs.php");
				exit();
			}		
			else
			{
				header("Location: ../login.php?login=error2");
				exit();
			}
				
		}
		
	
	}
}else{
	header("Location: ../login.php?login=error3");
	exit();
}
