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

<div class="navbar navbar-default">
  <div class="container-fluid">
<div class="nav navbar-left">
  <a class="navbar-brand glyphicon glyphicon-home" href="admin_page.php"> หน้าแรก</a>
</div> 
 <div class="navbar-left" style="margin-left: 10px; margin-top: 5px;">
  <a class="navbar-brand" href="admin_page.php">ตรวจสอบข้อมูลบุคคลากร</a>
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