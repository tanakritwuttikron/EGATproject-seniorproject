<?php 
require 'header/header_adminpage.php';
require 'db.php';

if($_SESSION['email'] == "")
  {
    echo "Please Login!";
    exit();
  }

  if($_SESSION['status_login'] != "Admin")
  {
    echo "This page for Admin only!";
    exit();
  } 
  
  $strSQL = "SELECT * FROM member WHERE email = '".$_SESSION['email']."' ";
  
  $objQuery = mysqli_query($conn,$strSQL);
  $objResult = mysqli_fetch_array($objQuery);

?>

<!DOCTYPE html>
<html>
<head>
<title>EgatProject</title>
  <meta charset="utf8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.btn3d.btn-default {
    color: #666666;
    box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 2px rgba(255,255,255,0.10) inset, 0 8px 0 0 #BEBEBE, 0 8px 8px 1px rgba(0,0,0,.2);
    background-color:#f9f9f9;
}
.btn3d.btn-default:active, .btn3d.btn-default.active {
    color: #666666;
    box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,.1);
    background-color:#f9f9f9;
}

.text1{
  font-weight: normal;
  font-family: Arial;
  font-size: 28px;
}

.title{
  font-family: Arial;
  font-size: 14px;
}

</style>
<body>

<div>&nbsp;</div>
<div>&nbsp;</div>

<div class="container" algin="top">
 <div class="row">
<label class="radio-inline col-md-12">
    <legend><div class="text1">ตรวจสอบข้อมูลบุคคลากร</div></legend>
    <?php
  
      $strKeyword = null;
      $strKeyword2 = null;
      $strKeyword3 = null;

      if(isset($_POST["txtKeyword"]))
     {
      $strKeyword = $_POST["txtKeyword"];
      $strKeyword2 = $_POST["txtlist"];
      $strKeyword3 = $_POST["txtlist2"];
      }

      ?>

  <p><form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <div><span class="col-md-3"><input class="form-control search-box" name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>" placeholder="ชื่อ-นามสกุล"></span>
<span class="col-md-3"><input class="form-control search-box" name="txtlist" type="text" id="txtlist" value="<?php echo $strKeyword2;?>" placeholder="แผนก">
</span>
<span class="col-md-3"><input class="form-control search-box" name="txtlist2" type="text" id="txtlist2" value="<?php echo $strKeyword3;?>" placeholder="ประเภท">
</span>
 </div>
 <input type="submit" value="ค้นหา" class="btn btn-default" style="margin-left: 15px;"></form> 
</p></div>

<?php

   $conn = mysqli_connect("localhost","root","","newegatproject");

   mysqli_set_charset($conn,"utf8");

   $sql = "SELECT * FROM member WHERE first_name LIKE '%".$strKeyword."%' and department LIKE '%".$strKeyword2."%' and category LIKE '%".$strKeyword3."%'  and status_login= 'User'";
   $query = mysqli_query($conn,$sql);


?>
<div class="container">
<div class="row">
  <div style="width: 100%; height: 100%; overflow-y: scroll; scrollbar-arrow-color:blue; scrollbar-face-color: #e7e7e7; scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:#888888">
<p>
<table class="table table-bordered table-hover " bgcolor="#FFFFFF" style="margin-top: 10px;">
  
  <tr>
    <th> <div class="title" align="center" style="width: 70px;">หมายเลขพนักงาน </div></th>
    <th> <div class="title" align="center" style="width: 70px;">สถานะการทำงาน </div></th>
    <th> <div class="title" align="center" style="width: 50px;">คำนำหน้า </div></th>
    <th> <div class="title" align="center" style="width: 120px;">ชื่อ </div></th>
    <th> <div class="title" align="center" style="width: 120px;">นามสกุล </div></th>
    <th> <div class="title" align="center" style="width: 50px;">เพศ </div></th>
    <th> <div class="title" align="center" style="width: 120px;">วัน/เดือน/ปี เกิด </div></th>
    <th> <div class="title" align="center" style="width: 50px;">อายุ </div></th>
    <th> <div class="title" align="center" style="width: 50px;">สัญชาติ </div></th>
    <th> <div class="title" align="center" style="width: 130px;">หมายเลขบัตรประพชาชน </div></th>
    <th> <div class="title" align="center" style="width: 130px;">หมายเลขหนังสือเดินทาง </div></th>
    <th> <div class="title" align="center" style="width: 80px;">ชื่อหน่วยงาน </div></th>
    <th> <div class="title" align="center" style="width: 80px;">แผนก </div></th>
    <th> <div class="title" align="center" style="width: 80px;">ประเภท </div></th>
    <th> <div class="title" align="center" style="width: 80px;">ลบข้อมูล </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><a href="detail_doc.php?id=<?php echo $result["id"];?>"><span class="glyphicon glyphicon-search"></span>
      <?php echo $result["id"];?></div></td>
    <td align="center"><?php echo $result["status"];?></td>
    <td align="center"><?php echo $result["title"];?></td>
    <td align="center"><?php echo $result["first_name"];?></td>
    <td align="center"><?php echo $result["last_name"];?></td>
    <td align="center"><?php echo $result["gender"];?></td>
    <td align="center"><?php echo $result["birthday"];?></td>
    <td align="center"><?php echo $result["age"];?></td>
    <td align="center"><?php echo $result["race"];?></td>
    <td align="center"><?php echo $result["id_card"];?></td>
    <td align="center"><?php echo $result["passport"];?></td>
    <td align="center"><?php echo $result["name_office"];?></td>
    <td align="center"><?php echo $result["department"];?></td>
    <td align="center"><?php echo $result["category"];?></td>
    <td align="center"><a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = 'check/delete.php?id=<?php echo $result["id"];?>'; }"><button class="btn btn-default" >ลบ</button></a></td>
  </tr>
<?php
}
?>
</table></p></div></div></div>


<form method="post" action="check/export.php" style="margin-top: 20px;">
<button type="submit" class="btn3d btn btn-default btn-md" align="right"><span class="glyphicon glyphicon-download-alt"></span> ส่งเป็นไฟล์ Excel</button></form>

<?php
mysqli_close($conn);
?>
</div>
</div>

</body>

<?php
include 'header/footer.php';
?>

</html>