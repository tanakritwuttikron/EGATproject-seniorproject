<?php
session_start();
include '../db.php';


	$strSQL = "SELECT * FROM member WHERE email = '".$_SESSION["email"]."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	
	if(!$objResult)
	{
			echo "email already exists!";
	}
	else
	{	
		
		$strSQL = "INSERT INTO training (id,name_course,name_trainer,address_course,name_address,contect_course,begin_course,end_course,hours_course,days_course,month_course,years_course) VALUES 
		('".$objResult["id"]."','".$_POST["txtname_course"]."','".$_POST["txtname_trainer"]."','".$_POST["txtaddress_course"]."','".$_POST["txtname_address"]."','".$_POST["txtcontect_course"]."','".$_POST["txtbegin_course"]."','".$_POST["txtend_course"]."','".$_POST["txthours_course"]."','".$_POST["txtdays_course"]."','".$_POST["txtmonth_course"]."','".$_POST["txtyears_course"]."')";

		$objQuery = mysqli_query($conn,$strSQL);
		
		header("Location: ../training.php?id=".$objResult["id"]."");
		
	}

	mysqli_close($conn);
?>