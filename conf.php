<?php
 require 'header/header.php';
 require 'db.php';
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
    margin-left: 515px;
}

.register-group{
    width: 260px;
    margin-top: 10px;
    margin-left: 420px;
}

.colorgraph {
    width: 400px;
    height: 5px;
    margin-top: 10px;
    margin-left: 345px;
    border-top: 0;
    background: #c4e17f;
    border-radius: 5px;
    background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  }


.text3{
  font-family: Arial;
  font-size: 36px;
  color: black;
  margin-top: 15px;
  text-align: center;
}

.text4{
  font-family: Arial;
  font-size: 32px;
  color: black;
  margin-top: 15px;
  text-align: center;
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
   if(isset($_GET["email"]))
   {
     $strid = $_GET["email"];
   }
  
   $conn = mysqli_connect("localhost","root","","newegatproject");
   mysqli_set_charset($conn,"utf8");

   $sql = "SELECT * FROM member WHERE email = '".$strid."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);


?>
<div class="container">
<div class="row">
<div class="col-md-12">
  <div class="text3">ลงทะเบียนเรียบร้อย</div>
  <div class="text3">ยินดีต้อนรับ</div>
  <div class="text4">คุณ <?php echo $result["title"];?>&nbsp;<?php echo $result["first_name"];?>&nbsp;<?php echo $result["last_name"];?></div>
  <div style="margin-top: 20px; text-align: center;"><a href="index.php"><button type="button" class="btn btn-success">กลับไปที่หน้าแรก</button></a></div>
</div>
</div>
</div>

<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>

<?php
include 'header/footer.php';
?>


</body>

</html>


