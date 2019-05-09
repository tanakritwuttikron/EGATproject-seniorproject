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
  
  $strSQL = "SELECT * FROM member tm,worktable tw WHERE tm.id = tw.id and email = '".$_SESSION['email']."' ";
  
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
  font-weight: normal;
  font-family: Arial;
  font-size: 16px;
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
  <div class="row" >
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
   <legend><div class="text1">แก้ไขตารางการทำงาน</div></legend>
       <form class="form-inline" action="check/insert_worktime.php?id=<?php echo $objResult["id"];?>" method="post" name="addtime">
        <div class="form-group">
          <label class="col-sm-5 control-label"><div class="text2">วันที่เข้าทำงาน 1:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_day1" placeholder="ตัวอย่าง จันทร์,อังคาร,พุธ" value="<?php echo $objResult["workday1"]?>">
          </div> 
        </div>
        <div class="form-group">
          <label class="col-sm-5 control-label"><div class="text2">เวลาเข้าทำงาน 1:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_time1" placeholder="ตัวอย่าง 08:00 - 10:00 น." value="<?php echo $objResult["worktime1"]?>">
            
          </div> 
        </div>

        <div class="form-group" style="margin-top: 10px;">
          <label class="col-sm-5 control-label"><div class="text2">วันที่เข้าทำงาน 2:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_day2" placeholder="ตัวอย่าง จันทร์,อังคาร,พุธ" value="<?php echo $objResult["workday2"]?>">
          </div> 
        </div>
        <div class="form-group" style="margin-top: 10px;">
          <label class="col-sm-5 control-label"><div class="text2">เวลาเข้าทำงาน 2:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_time2" placeholder="ตัวอย่าง 08:00 - 10:00 น." value="<?php echo $objResult["worktime2"]?>">
            
          </div> 
        </div>

        <div class="form-group" style="margin-top: 10px;">
          <label class="col-sm-5 control-label"><div class="text2">วันที่เข้าทำงาน 3:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_day3" placeholder="ตัวอย่าง จันทร์,อังคาร,พุธ" value="<?php echo $objResult["workday3"]?>">
            
          </div> 
        </div>
        <div class="form-group" style="margin-top: 10px;">
          <label class="col-sm-5 control-label"><div class="text2">เวลาเข้าทำงาน 3:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_time3" placeholder="ตัวอย่าง 08:00 - 10:00 น." value="<?php echo $objResult["worktime3"]?>">
            
          </div> 
        </div>

        <div class="form-group" style="margin-top: 10px;">
          <label class="col-sm-5 control-label"><div class="text2">วันที่เข้าทำงาน 4:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_day4" placeholder="ตัวอย่าง จันทร์,อังคาร,พุธ" value="<?php echo $objResult["workday4"]?>">
           
          </div> 
        </div>
        <div class="form-group" style="margin-top: 10px;">
          <label class="col-sm-5 control-label"><div class="text2">เวลาเข้าทำงาน 4:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_time4" placeholder="ตัวอย่าง 08:00 - 10:00 น." value="<?php echo $objResult["worktime4"]?>">
            
          </div> 
        </div>

        <div class="form-group" style="margin-top: 10px;">
          <label class="col-sm-5 control-label"><div class="text2">วันที่เข้าทำงาน 5:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_day5" placeholder="ตัวอย่าง จันทร์,อังคาร,พุธ" value="<?php echo $objResult["workday5"]?>">
            
          </div> 
        </div>
        <div class="form-group" style="margin-top: 10px;">
          <label class="col-sm-5 control-label"><div class="text2">เวลาเข้าทำงาน 5:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_time5" placeholder="ตัวอย่าง 08:00 - 10:00 น." value="<?php echo $objResult["worktime5"]?>">
            
          </div> 
        </div>

        <div class="form-group" style="margin-top: 10px;">
          <label class="col-sm-5 control-label"><div class="text2">วันที่เข้าทำงาน 6:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_day6" placeholder="ตัวอย่าง จันทร์,อังคาร,พุธ" value="<?php echo $objResult["workday6"]?>">
          
          </div> 
        </div>
        <div class="form-group" style="margin-top: 10px;">
          <label class="col-sm-5 control-label"><div class="text2">เวลาเข้าทำงาน 6:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_time6" placeholder="ตัวอย่าง 08:00 - 10:00 น." value="<?php echo $objResult["worktime6"]?>">
            
          </div> 
        </div>

        <div class="form-group" style="margin-top: 10px;">
          <label class="col-sm-5 control-label"><div class="text2">วันที่เข้าทำงาน 7:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_day7" placeholder="ตัวอย่าง จันทร์,อังคาร,พุธ" value="<?php echo $objResult["workday7"]?>">
            
          </div> 
        </div>
        <div class="form-group" style="margin-top: 10px;">
          <label class="col-sm-5 control-label"><div class="text2">เวลาเข้าทำงาน 7:</div></label>
          <div class="col-sm-7">
            <input class="form-control" type="text" name="txtwork_time7" placeholder="ตัวอย่าง 08:00 - 10:00 น." value="<?php echo $objResult["worktime7"]?>">
            
          </div> 
        </div>

        <div class="form-group" style="margin-top: 10px; margin-left: 60px;">
          <label><div class="text2">หมายเหตุ : </div></label>
          <textarea class="form-control" rows="5" cols="78" style="margin-left: 30px;" name="txtcomment" placeholder="หมายเหตุ..."><?php echo $objResult["comment"]?></textarea>

        <!-- Button -->
        <div style="margin-top: 15px; margin-left: 75%;">
          <button type="submit" onclick="submitAddtime();" name="submit" class="btn btn-success" style="margin-left: 30px;" >ยืนยัน</button>
    <span><button type="reset" name="reset" class="btn btn-danger" style="margin-left: 10px;">ยกเลิก</button></span>
        </div>
      </div>
      
      </from>

<script type="text/javascript">
function submitAddtime(){
      var objAddArticle = document.forms['addtime']; 
      if(objAddArticle.work_day1.value==null||objAddArticle.work_day1.value==""){
        alert('กรุณากรอก วันที่เข้าทำงาน !');
        objAddArticle.work_day1.focus();
        return false;
      }
      if(objAddArticle.work_time1.value==null||objAddArticle.work_time1.value==""){
        alert('กรุณากรอก เวลาเข้าทำงาน !');
        objAddArticle.work_time1.focus();
        return false;
      }
      objAddArticle.submit();
    }
</script>

     </div>
    </div>
    </div>

  </div>
  </div>
</div>

<?php
include 'header/footer.php';
?>



</body>
</html>


