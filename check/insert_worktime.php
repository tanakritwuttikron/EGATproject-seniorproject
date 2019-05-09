<?php
session_start();
include '../db.php';

  $strSQL = "SELECT * FROM member WHERE email = '".$_SESSION["email"]."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

	if($objResult)
	{
		$str = "UPDATE worktable SET workday1 = '".$_POST["txtwork_day1"]."', workday2 = '".$_POST["txtwork_day2"]."', workday3 = '".$_POST["txtwork_day3"]."', workday4 = '".$_POST["txtwork_day4"]."', workday5 = '".$_POST["txtwork_day5"]."', workday6 = '".$_POST["txtwork_day6"]."', workday7 = '".$_POST["txtwork_day7"]."', worktime1 = '".$_POST["txtwork_time1"]."', worktime2 = '".$_POST["txtwork_time2"]."', worktime3 = '".$_POST["txtwork_time3"]."', worktime4 = '".$_POST["txtwork_time4"]."', worktime5 = '".$_POST["txtwork_time5"]."', worktime6 = '".$_POST["txtwork_time6"]."', worktime7 = '".$_POST["txtwork_time7"]."', comment = '".$_POST["txtcomment"]."' WHERE id = '".$objResult["id"]."' ";
		//echo $str;
		
		 $objQuery = mysqli_query($conn,$str);
		
		header("Location: ../user_page.php?id=".$objResult["id"]."");
		}
		else {
		$strSQL = "INSERT INTO worktable (id,workday1,workday2,workday3,workday4,workday5,workday6,workday7,worktime1,worktime2,worktime3,worktime4,worktime5,worktime6,worktime7,comment) VALUES ('".$objResult["id"]."','".$_POST["txtwork_day1"]."','".$_POST["txtwork_day2"]."','".$_POST["txtwork_day3"]."','".$_POST["txtwork_day4"]."','".$_POST["txtwork_day5"]."','".$_POST["txtwork_day6"]."','".$_POST["txtwork_day7"]."','".$_POST["txtwork_time1"]."','".$_POST["txtwork_time2"]."','".$_POST["txtwork_time3"]."','".$_POST["txtwork_time4"]."','".$_POST["txtwork_time5"]."','".$_POST["txtwork_time6"]."','".$_POST["txtwork_time7"]."','".$_POST["txtcomment"]."')";

		//echo $strSQL;

		$objQuery = mysqli_query($conn,$strSQL);
		 
		header("Location: ../user_page.php?id=".$objResult["id"]."");
		}



	mysqli_close($conn);
?>