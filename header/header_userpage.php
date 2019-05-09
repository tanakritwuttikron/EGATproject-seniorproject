<?php  
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>EGAT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style_header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> 

<header>
<img src="img/final_header.png" style="width: 1349px; height: 160px;">
</header>

<?php

// Connects to your Database 
 $conn = mysqli_connect("localhost","root","","newegatproject");
 $sql = "SELECT * FROM member";
 $data = mysqli_query($conn,$sql); 

   $strid = null;
   if(isset($_GET["id"]))
   {
     $strid = $_GET["id"];
   }
  
   $conn = mysqli_connect("localhost","root","","egatproject");

   $sql = "SELECT * FROM member WHERE id = '".$strid."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>

<div class="navbar navbar-default">
  <div class="container-fluid">
<div class="nav navbar-left">
  <a class="navbar-brand glyphicon glyphicon-home" href="user_page.php?id=<?php echo $result["id"];?>"> หน้าแรก</a>
</div> 
 <div class="navbar-left" style="margin-left: 10px; margin-top: 5px;">
  <a class="navbar-brand" href="search_user.php?id=<?php echo $result["id"];?>">ตรวจสอบข้อมูลบุคคลากรทางการแพทย์</a>
 </div>   
<div class="nav navbar-right" style="margin-right: 10px; margin-top: 5px;">
  <?php
    if (isset($_SESSION['email'])) {
       echo "<a class='navbar-brand' href='check/check_logout.php'> ออกจากระบบ</a>";
    }
    ?>
</div>
</div>
</div>

</html>