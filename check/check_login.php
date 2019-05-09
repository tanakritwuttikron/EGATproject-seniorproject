<?php 
session_start();
include '../db.php';


$email = $_POST['email'];
$pass = $_POST['password'];	

$strSQL = "SELECT * FROM member WHERE email = '$email' 
	and password = '$pass'";

$objQuery = mysqli_query($conn,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if (!$objResult) {
	header("location:../check/msg_login.php");
}
else {
	$_SESSION["email"] = $objResult["email"];
	$_SESSION["id"] = $objResult["id"];
	$_SESSION["status_login"] = $objResult["status_login"];

	session_write_close();

	if ($objResult["status_login"] == "Admin") {
		header("location:../admin_page.php?id=".$objResult["id"]."");
	}
	else{
		header("location:../user_page.php?id=".$objResult["id"]."");
	}
}

?>