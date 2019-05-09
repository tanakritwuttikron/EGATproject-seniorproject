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
   <legend>
   <div class="text1">ข้อมูลบุคคลากรทางการแพทย์
      <a href="edit_detail_user.php?id=<?php echo $objResult["id"];?>"><button class="btn btn-primary" style="float:right">แก้ไขข้อมูลส่วนตัว</button></a></div></legend>
   <div style="float:right; font-size: 15px;">วันที่แก้ไขล่าสุด : <?php echo $objResult["today_date"];?> &nbsp; <?php echo $objResult["today_time"];?></div>

   <div>&nbsp;</div>

  <table class="table table-bordered col-md-5" align="center"  border="1" cellpadding="0" cellspacing="0" width="1036" height="100%">

   <div>&nbsp;</div>
   
  <!--Profile-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลส่วนตัว</div></td>
  </tr>
  <tr>
    <th width="120" class="text3">หมายเลขพนักงาน</th>
    <td width="200"><?php echo $result["id"];?></td>
    </tr>
  <tr>
    <th width="120" class="text3">สถานะการทำงาน</th>
    <td><?php echo $result["status"];?></td>
    </tr>
  <tr>
    <th width="120" class="text3">คำนำหน้า</th>
    <td><?php echo $result["title"];?></td>
    </tr>
  <tr>
    <th width="120" class="text3">ชื่อ</th>
    <td><?php echo $result["first_name"];?></td>
    </tr>
  <tr>
    <th width="120" class="text3">นามสกุล</th>
    <td><?php echo $result["last_name"];?></td>
    </tr>
  <tr>
    <th width="120" class="text3">เพศ</th>
    <td><?php echo $result["gender"];?></td>
    </tr>
  <tr>
    <th width="120" class="text3">วัน/เดือน/ปี เกิด</th>
    <td><?php echo $result["birthday"];?></td>
    </tr>
  <tr>
    <th width="120" class="text3">อายุ</th>
    <td><?php echo $result["age"];?></td>
    </tr>
  <tr>
    <th width="120" class="text3">สัญชาติ</th>
    <td><?php echo $result["race"];?></td>
    </tr>
  <tr>
    <th width="120" class="text3">หมายเลขบัตรประชาชน</th>
    <td><?php echo $result["id_card"];?></td>
    </tr>
  <tr>
    <th width="120" class="text3">หมายเลขหนังสือเดินทาง</th>
    <td><?php echo $result["passport"];?></td>
    </tr>

<!--Address-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลที่อยู่</div></td>
  </tr>
  <tr>
    <th width="120" class="text3">เลขที่</th>
    <td width="200"> <?php echo $result["house_no"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">อาคาร</th>
    <td> <?php echo $result["build"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ชั้นที่</th>
    <td> <?php echo $result["floor"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">เลขที่ห้อง</th>
    <td> <?php echo $result["room_no"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ซอย</th>
    <td> <?php echo $result["lane"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ถนน</th>
    <td> <?php echo $result["road"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">หมู่</th>
    <td> <?php echo $result["village_no"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ตำบล/แขวน</th>
    <td> <?php echo $result["sub_district"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">อำเภอ/เขต</th>
    <td> <?php echo $result["district"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">จังหวัด</th>
    <td> <?php echo $result["province"];?> </td>
    </tr>
 <tr>
    <th width="120" class="text3">ประเทศ</th>
    <td> <?php echo $result["country"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">รหัสไปรษณีย์</th>
    <td> <?php echo $result["postal_code"];?> </td>
    </tr>

<!--Connect-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลการสื่อสาร</div></td>
  </tr>
  <tr>
    <th width="120" class="text3">โทรศัพท์บ้าน</th>
    <td width="200"> <?php echo $result["home_phone"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">โทรศัพท์ที่ทำงาน</th>
    <td> <?php echo $result["office_phone"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">โทรศัพท์มือถือ1</th>
    <td> <?php echo $result["mobile_phone1"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">โทรศัพท์มือถือ2</th>
    <td> <?php echo $result["mobile_phone2"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">E-mail</th>
    <td> <?php echo $result["email"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">Facebook</th>
    <td> <?php echo $result["facebook"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">Homepage</th>
    <td> <?php echo $result["homepage"];?> </td>
    </tr>
  
 <!--Work Place-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลสถานที่ทำงาน</div></td>
  </tr>
  <tr>
    <th width="120" class="text3">ชื่อหน่วยงาน</th>
    <td width="200"> <?php echo $result["name_office"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ประเภท</th>
    <td> <?php echo $result["category"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">แผนก</th>
    <td> <?php echo $result["department"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ฝ่าย</th>
    <td> <?php echo $result["division"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ตำแหน่ง</th>
    <td> <?php echo $result["position"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ระดับ</th>
    <td> <?php echo $result["degree"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">หมายเลยประจำตัว</th>
    <td> <?php echo $result["identification_num"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">เริ่มทำงานเมื่อ</th>
    <td> <?php echo $result["beginworkdate"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ทำงานถึงวันที่</th>
    <td> <?php echo $result["endworkdate"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">เหตุผลที่ออกจากงาน</th>
    <td> <?php echo $result["reasons_leaving"];?> </td>
    </tr>

 <!--Connect 2-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลผู้ติดต่อฉุกเฉิน</div></td>
  </tr>
  <tr>
    <th width="120" class="text3">ข้อมูลบุคคล</th>
    <td width="200"> <?php echo $result["name_person"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ความสัมพพันธ์</th>
    <td> <?php echo $result["relationship"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ที่อยู่</th>
    <td> <?php echo $result["address_person"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">การสื่อสาร</th>
    <td> <?php echo $result["phone_person"];?> </td>
    </tr>
  
  <!--Study Profile-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลประเภทการศึกษา</div></td>
  </tr>
  <tr>
    <th width="120" class="text3">ประถมศึกษา</th>
    <td width="200"> <?php echo $result["primaryschool"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">มัธยมศึกษา</th>
    <td> <?php echo $result["secondaryschool"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">วิชาชีพ</th>
    <td> <?php echo $result["professional_sentences"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">อุดมศึกษา</th>
    <td> <?php echo $result["higher_education"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">การศึกษาพิเศษ</th>
    <td> <?php echo $result["special_education"];?> </td>
    </tr>
  
<!--Study Profile2-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลรายละเอียดวุฒิการศึกษา</div></td>
  </tr>
  <tr>
    <th width="120" class="text3">ประเภทการศึกษา</th>
    <td width="200"> <?php echo $result["type_education"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ชื่อวุฒิบัตร</th>
    <td> <?php echo $result["name_certificate"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">คณะ</th>
    <td> <?php echo $result["facuity"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">สาขา</th>
    <td> <?php echo $result["major"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ภาควิชา</th>
    <td> <?php echo $result["program"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">ชื่อสถาบัน</th>
    <td> <?php echo $result["institution_name"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">เริ่มการศึกษาเมื่อ</th>
    <td> <?php echo $result["beginstudy"];?> </td>
    </tr>
  <tr>
    <th width="120" class="text3">สำเร็จการศึกษาเมื่อ</th>
    <td> <?php echo $result["graduate"];?> </td>
    </tr>
 
  </table></div></div>
</div>
</div>
</div>
</div>

</body>

<?php
include 'header/footer.php';
?>

</html>