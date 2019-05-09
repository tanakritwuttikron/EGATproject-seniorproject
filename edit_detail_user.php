<?php 
include 'db.php';
include 'header/header_userpage.php';

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

<script type="text/javascript">
function submitAddcat(){
      var objAddArticle = document.forms['frmAdd'];
      if (! confirm('ยืนยันการแก้ไขข้อมูลใช่หรือไม่ ?')){
        return false;
      } else { 
        window.location ;
      }
      objAddArticle.submit();
}
</script>

<div>&nbsp;</div>
<div>&nbsp;</div>

<div class="container" algin="top">
<div class="row" >
<div class="col-md-12">
<form action="check/update_user.php" name="frmAdd" method="post" enctype="multipart/form-data">

  <div class="row">
    <div class="col-md-3">
      <p><img src="img/<?php echo $result["photo"];?>" style="width:190px; height:250px;" ></p>
      <div>&nbsp;</div>
     <div style="margin-top: 20px;"><input type="file" name="txtphoto" value="<?php echo $result["photo"];?>"></div>
     <div style="margin-top: 20px;"><input type="hidden" name="txtphoto" value="<?php echo $result["photo"];?>"></div>
  </div>

    <div class="col-md-9">
    <legend>
   <div class="text1">ข้อมูลแพทย์
    <button type="button" onclick="submitAddcat();" class="btn btn-primary" style="float:right">ยืนยันการแก้ไข</button></a></div></legend>

  <table class="table table-bordered col-md-5" align="center"  border="1" cellpadding="0" cellspacing="0" width="1036" height="100%">

  <!--Profile-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลส่วนตัว</div></td>
  </tr>
  <tr>
    <th width="120" class="text3">หมายเลขพนักงาน</th>
    <td width="200"><input type="hidden" name="txtid" value="<?php echo $result["id"];?>"><?php echo $result["id"];?></td>
    </tr>
  <tr>
    <th width="120" class="text3">สถานะการทำงาน</th>
    <td><input type="text" name="txtstatus" size="30" value="<?php echo $result["status"];?>"></td>
    </tr>
  <tr>
    <th width="120" class="text3">รหัสผ่าน</th>
    <td><input type="text" name="txtpassword" size="30" value="<?php echo $result["password"];?>"></td>
    </tr>
  <tr>
    <th width="120" class="text3">คำนำหน้า</th>
    <td><input type="text" name="txttitle" size="30" value="<?php echo $result["title"];?>"></td>
    </tr>
  <tr>
    <th width="120" class="text3">ชื่อ</th>
    <td><input type="text" name="txtfirst_name" size="30" value="<?php echo $result["first_name"];?>"></td>
    </tr>
  <tr>
    <th width="120" class="text3">นามสกุล</th>
    <td><input type="text" name="txtlast_name" size="30" value="<?php echo $result["last_name"];?>"></td>
    </tr>
  <tr>
    <th width="120" class="text3">เพศ</th>
    <td> 
      <?php 
      if($result["gender"]=='ชาย'){
      ?>
      <label class="radio-inline" for="gender-0" value="<?php echo $result["gender"];?>">
      <input type="radio" name="txtgender" id="gender-0" value="1" checked="checked">
      ชาย
    </label> 
    <label class="radio-inline" for="gender-1">
      <input type="radio" name="txtgender" id="gender-1" value="2">
      หญิง
    </label> 
    <?php
      }else{
    ?>
    <label class="radio-inline" for="gender-0" value="<?php echo $result["gender"];?>">
      <input type="radio" name="txtgender" id="gender-0" value="1">
      ชาย
    </label> 
    <label class="radio-inline" for="gender-1">
      <input type="radio" name="txtgender" id="gender-1" value="2" checked="checked">
      หญิง
    </label> 
    <?php 
      }
    ?>
    </td>
    </tr>
  <tr>
    <th width="120" class="text3">วัน/เดือน/ปี เกิด</th>
    <td><input id="birthday" name="txtbirthday" type="date" placeholder="birthday" class="form-control input-md" value="<?php echo $result["birthday"];?>"></td>
    </tr>
  <tr>
    <th width="120" class="text3">อายุ</th>
    <td><input type="text" name="txtage" size="30" value="<?php echo $result["age"];?>"></td>
    </tr>
  <tr>
    <th width="120" class="text3">สัญชาติ</th>
    <td><input type="text" name="txtrace" size="30" value="<?php echo $result["race"];?>"></td>
    </tr>
  <tr>
    <th width="120" class="text3">หมายเลขบัตรประชาชน</th>
    <td><input type="text" name="txtid_card" size="30" value="<?php echo $result["id_card"];?>"></td>
    </tr>
  <tr>
    <th width="120" class="text3">หมายเลขหนังสือเดินทาง</th>
    <td><input type="text" name="txtpassport" size="30" value="<?php echo $result["passport"];?>"></td>
    </tr>

<!--Address-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลที่อยู่</div></td>
  </tr>
  <tr>
    <th width="120" class="text3">เลขที่</th>
    <td width="200"><input type="text" name="txthouse_no" size="30" value="<?php echo $result["house_no"];?>" ></td>
    </tr>
  <tr>
    <th width="120" class="text3">อาคาร</th>
    <td><input type="text" name="txtbuild" size="30" value="<?php echo $result["build"];?>" ></td>
    </tr>
  <tr>
    <th width="120" class="text3">ชั้นที่</th>
    <td><input type="text" name="txtfloor" size="30" value="<?php echo $result["floor"]; ?>" ></td>
    </tr>
  <tr>
    <th width="120" class="text3">เลขที่ห้อง</th>
    <td> <input type="text" name="txtroom_no" size="30" value="<?php echo $result["room_no"]; ?>" ></td>
    </tr>
  <tr>
    <th width="120" class="text3">ซอย</th>
    <td><input type="text" name="txtlane" size="30" value="<?php echo $result["lane"]; ?>" ></td>
    </tr>
  <tr>
    <th width="120" class="text3">ถนน</th>
    <td><input type="text" name="txtroad" size="30" value="<?php echo $result["road"]; ?>" ></td>
    </tr>
  <tr>
    <th width="120" class="text3">หมู่</th>
    <td><input type="text" name="txtvillage_no" size="30" value="<?php echo $result["village_no"]; ?>" ></td>
    </tr>
  <tr>
    <th width="120" class="text3">ตำบล/แขวน</th>
    <td><input type="text" name="txtsub_district" size="30" value="<?php echo $result["sub_district"]; ?>" ></td>
    </tr>
  <tr>
    <th width="120" class="text3">อำเภอ/เขต</th>
    <td> <input type="text" name="txtdistrict" size="30" value="<?php echo $result["district"]; ?>" ></td>
    </tr>
  <tr>
    <th width="120" class="text3">จังหวัด</th>
    <td><input type="text" name="txtprovince" size="30" value="<?php echo $result["province"]; ?>" ></td>
    </tr>
 <tr>
    <th width="120" class="text3">ประเทศ</th>
    <td><input type="text" name="txtcountry" size="30" value="<?php echo $result["country"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">รหัสไปรษณีย์</th>
    <td><input type="text" name="txtpostal_code" size="30" value="<?php echo $result["postal_code"]; ?>" > </td>
    </tr>

<!--Connect-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลการสื่อสาร</div></td>
  </tr>
  <tr>
    <th width="120" class="text3">โทรศัพท์บ้าน</th>
    <td width="200"><input type="text" name="txthome_phone" size="30" value="<?php echo $result["home_phone"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">โทรศัพท์ที่ทำงาน</th>
    <td> <input type="text" name="txtoffice_phone" size="30" value="<?php echo $result["office_phone"]; ?>" ></td>
    </tr>
  <tr>
    <th width="120" class="text3">โทรศัพท์มือถือ1</th>
    <td><input type="text" name="txtmobile_phone1" size="30" value="<?php echo $result["mobile_phone1"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">โทรศัพท์มือถือ2</th>
    <td><input type="text" name="txtmobile_phone2" size="30" value="<?php echo $result["mobile_phone2"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">E-mail</th>
    <td><input type="text" name="txtemail" size="30" value="<?php echo $result["email"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">Facebook</th>
    <td><input type="text" name="txtfacebook" size="30" value="<?php echo $result["facebook"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">Homepage</th>
    <td><input type="text" name="txthomepage" size="30" value="<?php echo $result["homepage"]; ?>" > </td>
    </tr>
  
 <!--Work Place-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลสถานที่ทำงาน</div></td>
  </tr>
  <tr>
    <th width="120" class="text3">ชื่อหน่วยงาน</th>
    <td width="200"><input type="text" name="txtname_office" size="30" value="<?php echo $result["name_office"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">ประเภท</th>
    <td> <input type="text" name="txtcategory" size="30" value="<?php echo $result["category"]; ?>" ></td>
    </tr>
  <tr>
    <th width="120" class="text3">แผนก</th>
    <td><input type="text" name="txtdepartment" size="30" value="<?php echo $result["department"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">ฝ่าย</th>
    <td><input type="text" name="txtdivision" size="30" value="<?php echo $result["division"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">ตำแหน่ง</th>
    <td><input type="text" name="txtposition" size="30" value="<?php echo $result["position"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">ระดับ</th>
    <td><input type="text" name="txtdegree" size="30" value="<?php echo $result["degree"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">หมายเลยประจำตัว</th>
    <td> <input type="text" name="txtidentification_num" size="30" value="<?php echo $result["identification_num"]; ?>" ></td>
    </tr>
  <tr>
    <th width="120" class="text3">เริ่มทำงานเมื่อ</th>
    <td><input type="text" name="txtbeginworkdate" size="30" value="<?php echo $result["beginworkdate"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">ทำงานถึงวันที่</th>
    <td><input type="text" name="txtendworkdate" size="30" value="<?php echo $result["endworkdate"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">เหตุผลที่ออกจากงาน</th>
    <td><input type="text" name="txtreasons_leaving" size="30" value="<?php echo $result["reasons_leaving"]; ?>" > </td>
    </tr>

 <!--Connect 2-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลผู้ติดต่อฉุกเฉิน</div></td>
  </tr>
  <tr>
    <th width="120" class="text3">ข้อมูลบุคคล</th>
    <td width="200"><input type="text" name="txtname_person" size="30" value="<?php echo $result["name_person"];?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">ความสัมพพันธ์</th>
    <td> <input type="text" name="txtrelationship" size="30" value="<?php echo $result["relationship"]; ?>" ></td>
    </tr>
  <tr>
    <th width="120" class="text3">ที่อยู่</th>
    <td><input type="text" name="txtaddress_person" size="30" value="<?php echo $result["address_person"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">การสื่อสาร</th>
    <td><input type="text" name="txtphone_person" size="30" value="<?php echo $result["phone_person"]; ?>" > </td>
    </tr>
  
  <!--Study Profile-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลประเภทการศึกษา</div></td>
  </tr>
  <tr>
    <th width="120" class="text3">ประถมศึกษา</th>
    <td width="200"><input type="text" name="txtprimaryschool" size="30" value="<?php echo $result["primaryschool"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">มัธยมศึกษา</th>
    <td><input type="text" name="txtsecondaryschool" size="30" value="<?php echo $result["secondaryschool"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">วิชาชีพ</th>
    <td><input type="text" name="txtprofessional_sentences" size="30" value="<?php echo $result["professional_sentences"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">อุดมศึกษา</th>
    <td><input type="text" name="txthigher_education" size="30" value="<?php echo $result["higher_education"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">การศึกษาพิเศษ</th>
    <td><input type="text" name="txtspecial_education" size="30" value="<?php echo $result["special_education"]; ?>" > </td>
    </tr>
  
<!--Study Profile2-->
  <tr>
    <td colspan="2" class="bg-primary"><div class="text2">ข้อมูลรายละเอียดวุฒิการศึกษา</h5></td>
  </tr>
  <tr>
    <th width="120" class="text3">ประเภทการศึกษา</th>
    <td width="200"><input type="text" name="txttype_education" size="30" value="<?php echo $result["type_education"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">ชื่อวุฒิบัตร</th>
    <td><input type="text" name="txtname_certificate" size="30" value="<?php echo $result["name_certificate"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">คณะ</th>
    <td><input type="text" name="txtfacuity" size="30" value="<?php echo $result["facuity"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">สาขา</th>
    <td><input type="text" name="txtmajor" size="30" value="<?php echo $result["major"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">ภาควิชา</th>
    <td><input type="text" name="txtprogram" size="30" value="<?php echo $result["program"]; ?>" > </td>
    </tr>
 
  <tr>
    <th width="120" class="text3">ชื่อสถาบัน</th>
    <td><input type="text" name="txtinstitution_name" size="30" value="<?php echo $result["institution_name"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">เริ่มการศึกษาเมื่อ</th>
    <td><input type="text" name="txtbeginstudy" size="30" value="<?php echo $result["beginstudy"]; ?>" > </td>
    </tr>
  <tr>
    <th width="120" class="text3">สำเร็จการศึกษาเมื่อ</th>
    <td><input type="text" name="txtgraduate" size="30" value="<?php echo $result["graduate"]; ?>" > </td>
    </tr>
 
  </table></div></div></form>
</div>
</div>
</div>

</body>

<?php
include 'header/footer.php';
?>

</html>