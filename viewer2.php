<?php 
  require 'header/header.php';
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
<style type="text/css">
.text1{
  font-family: Arial;
  font-size: 16px;
}

.text2{
  font-family: Arial;
  font-size: 24px;
}

.textname{
  font-family: Arial;
  font-size: 24px;
}

.text3{
  font-weight: normal;
  font-family: Arial;
  font-size: 16px;
}

.texttitle{
  font-weight: normal;
  font-family: Arial;
  font-size: 28px;
}

</style>
<body>

<div>&nbsp;</div>
<div>&nbsp;</div>

<div class="container" algin="top">
 <div class="row">
<label class="radio-inline col-md-12">
    <legend><div class="texttitle">ตรวจสอบข้อมูลบุคคลากรทางการแพทย์</div></legend>
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
 </div><input type="submit" value="ค้นหา" class="btn btn-default" style="margin-left: 15px;"></form> 
</p></div>

<?php

   $conn = mysqli_connect("localhost","root","","newegatproject");
   mysqli_set_charset($conn,"utf8");
  
   $sql = "SELECT * FROM member tm,worktable tw WHERE tm.id = tw.id and (tm.first_name LIKE '%".$strKeyword."%' and tm.department LIKE '%".$strKeyword2."%' and tm.category LIKE '%".$strKeyword3."%') and tm.status_login= 'User'";


   $query = mysqli_query($conn,$sql);
?>

<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>

<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
<div class="row">
    <div class="col-md-3">
      <div> <img src="img/<?php echo $result["photo"];?>" style="width:190px; height:250px;" > </div>
    <div>&nbsp;</div>
  </div>

    <div class="col-md-4">
      <legend><div class="textname"><?php echo $result["title"];?> <?php echo $result["first_name"];?> &nbsp;&nbsp; <?php echo $result["last_name"];?></div></legend>
      <div><div class="text1">แผนก : <?php echo $result["department"];?></div></div>
      <div>&nbsp;</div>
      <div><div class="text1">ประเภท : <?php echo $result["category"];?></div></div>
     </div>
   <div class="col-md-5">
      <div class="text2">ตารางออกตรวจ</div>
      <div><table class="table  table-hover" align="center">
        <?php
        if ($result['workday1']== "") { 
        }
        else{
            echo "<tr>
                <th>
                  <p><div class='text3' align='left'>".$result['workday1']."</div>
                <th>
                  <p><div class='text3' align='left'>".$result['worktime1']."</div>
                </th>
                </th>
              </tr>";
        }
        ?>
        <?php
        if ($result['workday2']== "") {
        }else{
            echo "<tr>
                <th>
                  <p><div class='text3' align='left'>".$result['workday2']."</div>
                <th>
                  <p><div class='text3' align='left'>".$result['worktime2']."</div>
                </th>
                </th>
              </tr>";
        };
        ?>
        <?php
        if ($result['workday3']== "") {
        }else{
            echo "<tr>
                <th>
                  <p><div class='text3' align='left'>".$result['workday3']."</div>
                <th>
                  <p><div class='text3' align='left'>".$result['worktime3']."</div>
                </th>
                </th>
              </tr>";
        }
        ?>
        <?php
        if ($result['workday4']== "") { 
        }
        else{
            echo "<tr>
                <th>
                  <p><div class='text3' align='left'>".$result['workday4']."</div>
                <th>
                  <p><div class='text3' align='left'>".$result['worktime4']."</div>
                </th>
                </th>
              </tr>";
        }
        ?>
        <?php
        if ($result['workday5']== "") { 
        }
        else{
            echo "<tr>
                <th>
                  <p><div class='text3' align='left'>".$result['workday5']."</div>
                <th>
                  <p><div class='text3' align='left'>".$result['worktime5']."</div>
                </th>
                </th>
              </tr>";
        }
        ?>
        <?php
        if ($result['workday6']== "") { 
        }
        else{
            echo "<tr>
                <th>
                  <p><div class='text3' align='left'>".$result['workday6']."</div>
                <th>
                  <p><div class='text3' align='left'>".$result['worktime6']."</div>
                </th>
                </th>
              </tr>";
        }
        ?>
        <?php
        if ($result['workday7']== "") { 
        }
        else{
            echo "<tr>
                <th>
                  <p><div class='text3' align='left'>".$result['workday7']."</div>
                <th>
                  <p><div class='text3' align='left'>".$result['worktime7']."</div>
                </th>
                </th>
              </tr>";
        }
        ?>
            <th>
              <p><div class="text3">หมายเหตุ: <?php echo $result["comment"]?></div>
            <th>
          </tr>
        </table></div>
     </div> 

</div>





<?php
}
?>

<?php
mysqli_close($conn);
?>

</div>
</div>
</body>

<?php
require 'header/footer.php';
?>

</html>
