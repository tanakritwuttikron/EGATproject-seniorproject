<?php 
  require 'header/header_userpage.php';
  require 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>EgatProject</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<?php

// Connects to your Database 
 $conn = mysqli_connect("localhost","root","","newegatproject");
 mysqli_set_charset($conn,"utf8");

 $sql = "SELECT * FROM member";
 $data = mysqli_query($conn,$sql); 

   $strid = null;
   if(isset($_GET["id"]))
   {
     $strid = $_GET["id"];
   }
  
   $conn = mysqli_connect("localhost","root","","newegatproject");
   mysqli_set_charset($conn,"utf8");

   $sql = "SELECT * FROM member WHERE id = '".$strid."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);


?>
<p align="center">
  <img src="img/doctor.jpg" style="width:190px; height:250px;" ></p>

<div class="container">
  <div class="row">
  <div class="col-md-12">
    <legend><h3 align="center" style="margin-top: 30px;"><?php echo $result["title"];?>. <?php echo $result["first_name"];?> &nbsp;&nbsp; <?php echo $result["last_name"];?></h3></legend>
</div>
</div>
</div>

<div class="container">
 <div class="row">
            <div class="col-sm-6">
              <legend><h3 align="center">ความเชี่ยวชาญ</h3></legend>
              <table class="table table-bordered" align="center">
          <tr>
            <th>
              <h4 style="margin-top: 7px;">ชื่อหน่วยงาน : <?php echo $result["name_office"];?></h4>
            <h4>แผนก : <?php echo $result["department"];?></h4>
              <h4>ตำแหน่ง : <?php echo $result["position"]?></h4>
              <h4>ระดับ : <?php echo $result["degree"]?></h4>
            </th>
          </tr>
        </table>
      </div>

      <div class="col-sm-6">
              <legend><h3 align="center">ตารางออกตรวจ</h3></legend>
              <table class="table table-condensed table-hover" align="center">
          <tr>
            <th>
              <p><h4 align="left">จันทร์ , พุธ</h4>
            <th>
              <p><h4 align="left">08:00 - 11:00 น.</h4>
            </th>
            </th>
          </tr>
          <tr>
            <th>
              <p><h4 align="left">ศุกร์</h4>
            <th>
              <p><h4 align="left">09:00 - 14:00 น.</h4>
            </th>
            </th>
          </tr>
          <tr>
            <th>
              <p><h4>หมายเหตุ</h4>
            <th>
          </tr>
        </table>
      </div>
      
  </div>
</div>



</body>
<?php
include 'header/footer.php';
?>
</html>