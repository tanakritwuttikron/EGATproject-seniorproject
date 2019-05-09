<?php
  require 'header/header_userpage.php';
  require 'db.php';

  if($_SESSION['email'] == "")
  {
    echo "Please Login!";
    exit();
  }

  if($_SESSION['status_login'] != "User")
  {
    echo "This page for User only!";
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
.text1{
  font-weight: normal;
  font-family: Arial;
  font-size: 28px;
}

.text2{
  font-family: Arial;
  font-size: 18px;
}

.text3{
  font-weight: normal;
  font-family: Arial;
  font-size: 15px;
}

#btn1{
  margin-top: 10px;
  margin-left: 20px;
}

#btn2{
  margin-top: 10px;
  margin-left: 20px;
}

#btn3{
  margin-top: 10px;
  margin-left: 20px;
}
</style>
<body>

<div>&nbsp;</div>
<div>&nbsp;</div>

<div class="container" algin="top">
  <div class="row">
    <div class="col-md-12">
    <div class="col-md-3">
    <div> <img src="img/<?php echo $objResult["photo"];?>" style="width:190px; height:250px;" > </div>
    <div>&nbsp;</div>
      <p><a href="user_page.php?id=<?php echo $objResult["id"];?>"><button class="btn btn-default col-sm-7" id="btn1">แก้ไขตารางการทำงาน</button></a></p>
      <p><a href="training.php?id=<?php echo $objResult["id"];?>"><button class="btn btn-default col-sm-7" id="btn2">เพิ่มชั่วโมงอบรม</button></a></p>
      <p><a href="detail_profile.php?id=<?php echo $objResult["id"];?>"><button class="btn btn-default col-sm-7" id="btn3">ข้อมูลส่วนตัว</button></a></p>
  </div>

<div class="col-md-9">
  <div class="row">
    <div class="col-md-12">
   <legend><div class="text1">เพิ่มชั่วโมงอบรม</div></legend>
 </div>
</div>

<div>&nbsp;</div>

<div class="row">
    <div class="col-md-8">

    <form class="form-horizontal" action="check/insert_training.php?id=<?php echo $result["id"];?>" method="POST">
    <fieldset>

      <div class="text2">หลักสูตร</div>

      <div>&nbsp;</div>

        <div class="form-group">
            <label class="col-md-5 control-label text3">ชื่อหลักสูตร/เรื่อง</label>
            <div class="col-md-7">
            <input type="text" name="txtname_course" placeholder="ชื่อหลักสูตร/เรื่อง" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label text3">ผู้ดำเนินการฝึกอบรม</label>
            <div class="col-md-7">
            <input type="text" name="txtname_trainer" placeholder="ผู้ดำเนินการฝึกอบรม" class="form-control input-md">
            </div>
        </div>

        <div>&nbsp;</div> 

        <div class="text2">ที่อยู่/สถาบัน</div>

        <div>&nbsp;</div> 

        <div class="form-group">
            <label class="col-md-5 control-label text3">ที่อยู่</label>
            <div class="col-md-7">
            <textarea class="form-control input-md" rows="5" name="txtaddress_course" placeholder="ที่อยู่"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label text3">ชื่อสถาบัน</label>
            <div class="col-md-7">
            <input type="text" name="txtname_address" placeholder="ชื่อสถาบัน" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label text3">การสื่อสาร</label>
            <div class="col-md-7">
            <input type="text" name="txtcontect_course" placeholder="การสื่อสาร" class="form-control input-md">
            </div>
        </div>

        <div>&nbsp;</div> 

        <div class="text2">ระยะเวลาศึกษา/อบรม</div>

        <div>&nbsp;</div> 

        <div class="form-group">
            <label class="col-md-5 control-label text3">อบรมเมื่อ</label>
            <div class="col-md-7">
            <input type="date" name="txtbegin_course" placeholder="อบรมเมื่อ" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label text3">เสร็จเมื่อ</label>
            <div class="col-md-7">
            <input type="date" name="txtend_course" placeholder="เสร็จเมื่อ" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label text3">จำนวนชั่วโมง</label>
            <div class="col-md-7">
            <input type="text" name="txthours_course" placeholder="จำนวนชั่วโมง" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label text3">จำนวนวัน</label>
            <div class="col-md-7">
            <input type="text" name="txtdays_course" placeholder="จำนวนวัน" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label text3">จำนวนเดือน</label>
            <div class="col-md-7">
            <input type="text" name="txtmonth_course" placeholder="จำนวนเดือน" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label text3">จำนวนปี</label>
            <div class="col-md-7">
            <input type="text" name="txtyears_course" placeholder="จำนวนปี" class="form-control input-md">
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-5 control-label text3" for="submit"></label>
          <div class="col-md-7">
            <button id="submit" name="submit" class="btn btn-success">ยืนยัน</button>
            <span><button id="danger" name="danger" class="btn btn-danger">ยกเลิก</button></span>
          </div>
        </div>

    </fieldset>
    </form>

    </div>
  </div>


  <div>&nbsp;</div> 

  <div class="text2">ประวัติการศึกษา/อบรม</div>

  <div>&nbsp;</div> 

<?php

   $strid = null;
   if(isset($_GET["id"]))
   {
     $strid = $_GET["id"];
   }

   $conn = mysqli_connect("localhost","root","","newegatproject");

   mysqli_set_charset($conn,"utf8");

   $sql = "SELECT * FROM training WHERE id = '".$strid."' ";

   $query = mysqli_query($conn,$sql);

?>

<div class="col-md-12" >
  <div style="width: 100%; height: 100%; overflow-y: scroll; scrollbar-arrow-color:blue; scrollbar-face-color: #e7e7e7; scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:#888888">
<p>
<table class="table table-bordered table-hover " bgcolor="#FFFFFF" style="margin-top: 10px;">
  
<tr>
<th><div class="title" align="center" style="width: 70px;">ชื่อหลักสูตร</th>
<th><div class="title" align="center" style="width: 70px;">ผู้ดำเนินการ</th>
<th><div class="title" align="center" style="width: 170px;">ที่อยู่</th>
<th><div class="title" align="center" style="width: 70px;">ชื่อสถาบัน</th>
<th><div class="title" align="center" style="width: 70px;">การสื่อสาร</th>
<th><div class="title" align="center" style="width: 70px;">อบรมเมื่อ</th>
<th><div class="title" align="center" style="width: 70px;">เสร็จเมื่อ</th>
<th><div class="title" align="center" style="width: 70px;">จำนวนชั่วโมง</th>
<th><div class="title" align="center" style="width: 70px;">จำนวนวัน</th>
<th><div class="title" align="center" style="width: 70px;">จำนวนเดือน</th>
<th><div class="title" align="center" style="width: 70px;">จำนวนปี</th>
<th><div class="title" align="center" style="width: 70px;">ลบ</th>
</tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
<tr>
    <td align="center"><?php echo $result["name_course"];?></td>
    <td align="center"><?php echo $result["name_trainer"];?></td>
    <td align="center"><?php echo $result["address_course"];?></td>
    <td align="center"><?php echo $result["name_address"];?></td>
    <td align="center"><?php echo $result["contect_course"];?></td>
    <td align="center"><?php echo $result["begin_course"];?></td>
    <td align="center"><?php echo $result["end_course"];?></td>
    <td align="center"><?php echo $result["hours_course"];?></td>
    <td align="center"><?php echo $result["days_course"];?></td>
    <td align="center"><?php echo $result["month_course"];?></td>
    <td align="center"><?php echo $result["years_course"];?></td>
    <td align="center"><a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = 'check/delete_training.php?id=<?php echo $result["train_id"];?>'; }"><button class="btn btn-default" >ลบ</button></a></td>
  </tr>
<?php
}
?>
</table></div></div>

</div>
</div>
</div>



</body>
</html>