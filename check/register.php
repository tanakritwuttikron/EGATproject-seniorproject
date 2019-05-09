<?php
session_start();
include '../db.php';

	$strSQL = "SELECT * FROM member WHERE email = '".trim($_POST['email'])."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	
	if($objResult)
	{
			echo "email already exists!";
	}
	else
	{	
		
		$strSQL = "INSERT INTO member (email,password,title,first_name,last_name,gender) VALUES ('".$_POST["email"]."', '".$_POST["password"]."','".$_POST["titlename"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["gender"]."')";
		$objQuery = mysqli_query($conn,$strSQL);
		$last_id = mysqli_insert_id($conn);

		$strSQL = "INSERT INTO worktable (id,workday1,workday2,workday3,workday4,workday5,workday6,workday7,worktime1,worktime2,worktime3,worktime4,worktime5,worktime6,worktime7,comment) VALUES ('".$last_id."','','','','','','','','','','','','','','','' )";
		$objQuery = mysqli_query($conn,$strSQL);
		
		header("Location: ../conf.php?email=".$_POST["email"]."");
		
	}

	mysqli_close($conn);
?>