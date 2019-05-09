<?php
 require 'header/header.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>EGAT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>

.button-submit{
    margin-left: 377px;
}

.register-group{
    width: 250px;
    margin-top: 10px;
    margin-left:285px;
}

.colorgraph {
    width: 370px;
    height: 5px;
    margin-top: 10px;
    margin-left: 220px;
    border-top: 0;
    background: #c4e17f;
    border-radius: 5px;
    background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  }

#text1{
  font-family: Arial;
  font-size: 14px;
  color: red;
  margin-top: 10px;
  margin-left: 0px;
  margin-right: 0px;

}

#text2{
  font-family: Arial;
  font-size: 14px;
  color: red;
  margin-top: 10px;
  margin-left: 200px;
  margin-right: 0px;
  padding-left:  0px;
  padding-right:  0px;
}

#text3{
  font-family: Arial;
  font-size: 32px;
  color: black;
  margin-top: 10px;
  margin-left: 335px;
}

#button-search{
  margin-top: 210px;
  margin-left: 90px;

}

footer {
      background-color: #FFCC00;
      padding:10px;
}

</style>
<body> 

  <div class="container">
    <div class="row">
      <div class="col-md-12">
   <div class="col-md-5">
        <a href="viewer2.php"><button class="btn btn-default glyphicon glyphicon-search" id="button-search"> ตรวจสอบข้อมูลบุคคลากรทางการแพทย์</button></a>
        <p id="text1">** หมายเหตุ สำหรับบุคคลที่ต้องการตรวจสอบข้อมูลของบุคลากรทางการแพทย์ </p>

         <p id="text1" style="padding-left:  90px;"> สามารถคลิกที่ปุ่มด้านบนเพื่อตรวจสอบได้เลย **</p>
</div>

     
        <div class="col-md-7">
        <p id="text2">** หมายเหตุ เฉพาะบุคคลากรทางการแพทย์ที่ต้องการเข้าใช้ระบบเท่านั้น **</p>
        <p id="text3">ลงทะเบียน</p>
        
      
      <form name='regis' action='check/register.php' method='POST'>
      
      <hr class="colorgraph">
        <fieldset class="register-group">
        
        <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon">
              <i class="glyphicon glyphicon-user">
              </i>
              </div>
                    <input id="email" name="email" type="email" placeholder="อีเมล์" class="form-control input-md">
        </div></div>

        <div class="form-group" >
          <div class="input-group">
              <div class="input-group-addon">
              <i class="glyphicon glyphicon-lock">
              </i>
               </div>
                    <input id="password" name="password" type="password" placeholder="รหัสผ่าน" class="form-control input-md">
        </div></div>

        <div class="form-group">
          <div class="input-group">
              <div class="input-group-addon">
              <i class="glyphicon glyphicon-lock">
              </i>
               </div>
                    <input id="password_cf" name="password_cf" type="password" placeholder="ยืนยันรหัสผ่าน" class="form-control input-md">
        </div></div>

        <p><div class="form-group">
          <div class="input-group">
              <div class="input-group-addon">
              <i class="glyphicon glyphicon-user">
              </i>
              </div>
                    <input id="titlename" name="titlename" type="text" placeholder="คำนำหน้าชื่อ" class="form-control input-md">
        </div></div></p>

        <p><div class="form-group">
          <div class="input-group">
              <div class="input-group-addon">
              <i class="glyphicon glyphicon-user">
              </i>
              </div>
                    <input id="firstname" name="firstname" type="text" placeholder="ชื่อจริง" class="form-control input-md">
        </div></div></p>

        <p><div class="form-group">
          <div class="input-group">
              <div class="input-group-addon">
              <i class="glyphicon glyphicon-user">
              </i>
              </div>
                    <input id="lastname" name="lastname" type="text" placeholder="นามสกุล" class="form-control input-md">
        </div></div></p>

        <p><div class="form-group">
          <label class="radio-inline" for="gender-0">
            <input type="radio" name="gender" id="gender-0" value="1" checked="checked">
            ชาย
             </label>
            <label class="radio-inline" for="gender-1">
              <input type="radio" name="gender" id="gender-1" value="2">
            หญิง
           </label>
        </div></p>
      </fieldset>
      <p>
        <hr class="colorgraph">
        <div class="row">
          <div class="button-submit">
            <button type="button" onclick="submitAddcat();" class="btn btn-success">ลงทะเบียน</button></div>
        </div>
      </p>
      </div>
    </form>
  </div>
  </div>
  </div>


<script type="text/javascript">
function submitAddcat(){
      var objAddArticle = document.forms['regis']; 
      if(objAddArticle.email.value==null||objAddArticle.email.value==""){
        alert('กรุณากรอก E-mail !');
        objAddArticle.email.focus();
        return false;
      }
      if(objAddArticle.password.value==null||objAddArticle.password.value==""){
        alert('กรุณากรอก รหัสผ่าน !');
        objAddArticle.password.focus();
        return false;
      }
      if(objAddArticle.password.value != objAddArticle.password_cf.value){
        alert('รหัสผ่านไม่ตรงกัน !');
        objAddArticle.password_cf.focus();
        return false;
      }
      if(objAddArticle.titlename.value==null||objAddArticle.titlename.value==""){
        alert('กรุณากรอก คำนำหน้า !');
        objAddArticle.titlename.focus();
        return false;
      }
      if(objAddArticle.firstname.value==null||objAddArticle.firstname.value==""){
        alert('กรุณากรอก ชื่อจริง !');
        objAddArticle.firstname.focus();
        return false;
      }
      if(objAddArticle.lastname.value==null||objAddArticle.lastname.value==""){
        alert('กรุณากรอก นามสกุล!');
        objAddArticle.lastname.focus();
        return false;
      }
       if(objAddArticle.gender.value==null||objAddArticle.gender.value==""){
        alert('กรุณาระบุ เพศ !');
        objAddArticle.gender.focus();
        return false;
      }

      objAddArticle.submit();
    }
</script>


</body>

<?php include 'header/footer.php'; ?>

</html>
