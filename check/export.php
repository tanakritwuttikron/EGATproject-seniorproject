<?php
session_start();
require '../db.php';

header("Content-type: application/xls");
header("Content-Disposition: attachment; filename=รายชื่อบุคคลากรทางการแพทย์.xls");

$strSQL = "SELECT * FROM member";
$objQuery = mysqli_query($conn,$strSQL);

?>

<table class="table table-bordered table-hover table-inverse  " bgcolor="#FFFFFF" id="list-data">
  <tr>
   <th><div align="center"  style="width: auto"> หมายเลขพนักงาน </div></th>
            <th><div align="center" style="width: auto"> สถานะการทำงาน </div></th>
            <th><div align="center" style="width: auto"> คำนำหน้า </div></th>
            <th><div align="center" style="width: auto"> ชื่อ </div></th>
            <th><div align="center" style="width: auto"> นามสกุล </div></th>
            <th><div align="center" style="width: auto"> เพศ </div></th>
            <th><div align="center" style="width: auto"> วัน/เดือน/ปี เกิด </div></th>
            <th><div align="center" style="width: auto"> อายุ </div></th>
            <th><div align="center" style="width: auto;"> สัญชาติ </div></th>
            <th ><div align="center" style="width: auto;">หมายเลขบัตรประชาชน</div> </th>
            <th><div align="center" style="width: auto"> หมายเลขหนังสือเดินทาง </div></th>
            <th><div align="center" style="width: auto"> เลขที่ </div></th>
            <th><div align="center" style="width: auto"> อาคาร </div></th>
            <th><div align="center" style="width: auto"> ชั้นที่ </div></th>
            <th><div align="center" style="width: auto"> เลขที่ห้อง </div></th>
            <th><div align="center" style="width: auto"> ซอย </div></th>
            <th><div align="center" style="width: auto"> ถนน </div></th>
            <th><div align="center" style="width: auto"> หมู่ </div></th>
            <th><div align="center" style="width: auto"> ตำบล/แขวน </div></th>
            <th><div align="center" style="width: auto"> อำเภอ/เขต </div></th>
            <th><div align="center" style="width: auto"> จังหวัด </div></th>
            <th><div align="center" style="width: auto"> ประเทศ </div></th>
            <th><div align="center" style="width: auto"> รหัสไปรษณีย์ </div></th>
            <th><div align="center" style="width: auto"> โทรศัพท์บ้าน </div></th>
            <th><div align="center" style="width: auto"> โทรศัพท์ที่ทำงาน </div></th>
            <th><div align="center" style="width: auto"> โทรศัพท์มือถือ1 </div></th>
            <th><div align="center" style="width: auto"> โทรศัพท์มือถือ2 </div></th>
            <th><div align="center" style="width: auto"> E-mail </div></th>
            <th><div align="center" style="width: auto"> Facebook </div></th>
            <th><div align="center" style="width: auto"> Homepage </div></th>
            <th><div align="center" style="width: auto"> ชื่อหน่วยงาน </div></th>
            <th><div align="center" style="width: auto"> ประเภท </div></th>
            <th><div align="center" style="width: auto"> แผนก </div></th>
            <th><div align="center" style="width: auto"> ฝ่าย </div></th>
            <th><div align="center" style="width: auto"> ตำแหน่ง </div></th>
            <th><div align="center" style="width: auto"> ระดับ </div></th>
            <th><div align="center" style="width: auto"> หมายเลยประจำตัว </div></th>
            <th><div align="center" style="width: auto"> เริ่มทำงานเมื่อ </div></th>
            <th><div align="center" style="width: auto"> ทำงานถึงวันที่ </div></th>
            <th><div align="center" style="width: auto"> เหตุผลที่ออกจากงาน </div></th>
            <th><div align="center" style="width: auto"> ข้อมูลบุคคล </div></th>
            <th><div align="center" style="width: auto"> ความสัมพพันธ์ </div></th>
            <th><div align="center" style="width: auto"> ที่อยู่ </div></th>
            <th><div align="center" style="width: auto"> การสื่อสาร </div></th>
            <th><div align="center" style="width: auto"> ประถมศึกษา </div></th>
            <th><div align="center" style="width: auto"> มัธยมศึกษา </div></th>
            <th><div align="center" style="width: auto"> วิชาชีพ </div></th>
            <th><div align="center" style="width: auto"> อุดมศึกษา </div></th>
            <th><div align="center" style="width: auto"> การศึกษาพิเศษ </div></th>
            <th><div align="center" style="width: auto"> ประเภทการศึกษา </div></th>
            <th><div align="center" style="width: auto"> ชื่อวุฒิบัตร </div></th>
            <th><div align="center" style="width: auto"> คณะ </div></th>
            <th><div align="center" style="width: auto"> สาขา </div></th>
            <th><div align="center" style="width: auto"> ภาควิชา </div></th>
            <th><div align="center" style="width: auto"> ชื่อสถาบัน </div></th>
            <th><div align="center" style="width: auto"> เริ่มการศึกษาเมื่อ </div></th>
            <th><div align="center" style="width: auto"> สำเร็จการศึกษาเมื่อ </div></th>
 </tr>
<?php
while($result=mysqli_fetch_array($objQuery))
{
?>
<tr>
    <td align="center"><?php echo $result["id"];?></td>
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
    <td align="center"><?php echo $result["house_no"];?></td>
    <td align="center"><?php echo $result["build"];?></td>
    <td align="center"><?php echo $result["floor"];?></td>
    <td align="center"><?php echo $result["room_no"];?></td>
    <td align="center"><?php echo $result["lane"];?></td>
    <td align="center"><?php echo $result["road"];?></td>
    <td align="center"><?php echo $result["village_no"];?></td>
    <td align="center"><?php echo $result["sub_district"];?></td>
    <td align="center"><?php echo $result["district"];?></td>
    <td align="center"><?php echo $result["province"];?></td>
    <td align="center"><?php echo $result["country"];?></td>
    <td align="center"><?php echo $result["postal_code"];?></td>
    <td align="center"><?php echo $result["home_phone"];?></td>
    <td align="center"><?php echo $result["office_phone"];?></td>
    <td align="center"><?php echo $result["mobile_phone1"];?></td>
    <td align="center"><?php echo $result["mobile_phone2"];?></td>
    <td align="center"><?php echo $result["email"];?></td>
    <td align="center"><?php echo $result["facebook"];?></td>
    <td align="center"><?php echo $result["homepage"];?></td>
    <td align="center"><?php echo $result["name_office"];?></td>
    <td align="center"><?php echo $result["category"];?></td>
    <td align="center"><?php echo $result["department"];?></td>
    <td align="center"><?php echo $result["division"];?></td>
    <td align="center"><?php echo $result["position"];?></td>
    <td align="center"><?php echo $result["degree"];?></td>
    <td align="center"><?php echo $result["identification_num"];?></td>
    <td align="center"><?php echo $result["beginworkdate"];?></td>
    <td align="center"><?php echo $result["endworkdate"];?></td>
    <td align="center"><?php echo $result["reasons_leaving"];?></td>
    <td align="center"><?php echo $result["name_person"];?></td>
    <td align="center"><?php echo $result["relationship"];?></td>
    <td align="center"><?php echo $result["address_person"];?></td>
    <td align="center"><?php echo $result["phone_person"];?></td>
    <td align="center"><?php echo $result["primaryschool"];?></td>
    <td align="center"><?php echo $result["secondaryschool"];?></td>
    <td align="center"><?php echo $result["professional_sentences"];?></td>
    <td align="center"><?php echo $result["higher_education"];?></td>
    <td align="center"><?php echo $result["special_education"];?></td>
    <td align="center"><?php echo $result["type_education"];?></td>
    <td align="center"><?php echo $result["name_certificate"];?></td>
    <td align="center"><?php echo $result["facuity"];?></td>
    <td align="center"><?php echo $result["major"];?></td>
    <td align="center"><?php echo $result["program"];?></td>
    <td align="center"><?php echo $result["institution_name"];?></td>
    <td align="center"><?php echo $result["beginstudy"];?></td>
    <td align="center"><?php echo $result["graduate"];?></td>

  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
