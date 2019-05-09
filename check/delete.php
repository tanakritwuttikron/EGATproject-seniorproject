<?php
	$conn = mysqli_connect("localhost","root","","newegatproject");

	$strid = $_GET["id"];
	$sql = "DELETE FROM member
			WHERE id = '".$strid."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 echo "Record delete successfully";
	}

	mysqli_close($conn);
	
	header("Location: ../admin_page.php");
?>
