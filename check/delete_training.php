<?php
	$conn = mysqli_connect("localhost","root","","newegatproject");

	$strid = $_GET["train_id"];
	$sql = "DELETE FROM training
			WHERE train_id = '".$strid."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 echo "Record delete successfully";
	}

	mysqli_close($conn);
	
	header("Location: ../user_page.php?id=".$objRusult["id"]."");
?>
