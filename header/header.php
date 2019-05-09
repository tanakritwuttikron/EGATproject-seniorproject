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

<script type="text/javascript">
function submitLogin(){
      var objAddArticle = document.forms['login']; 
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
      objAddArticle.submit();
    }
</script>

<div class="navbar navbar-default">
  <div class="container-fluid">
    <div class="nav navbar-left">
      <a class="navbar-brand glyphicon glyphicon-home" href="index.php" align="top"> หน้าแรก</a>
    </div>
    <div class="nav navbar-right" style="margin-right: 10px; margin-top: 7px;">
      <form class="form-inline" action="check/check_login.php" method="post" name="login">
        <div class="form-group">
          <input type="email" class="form-control" id="email" placeholder="อีเมล์"  name="email">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="password" placeholder="รหัสผ่าน" name="password">
        </div>
        <button type="button" onclick="submitLogin();" class="btn btn-default">เข้าสู่ระบบ</button>
      </form>
    </div>
  </div>
</div>

</html>