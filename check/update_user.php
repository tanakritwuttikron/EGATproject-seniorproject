<?php
	// Connects to your Database 
 $conn = mysqli_connect("localhost","root","","newegatproject");
 mysqli_set_charset($conn,"utf8");
 date_default_timezone_set('Asia/Bangkok');

if ($_FILES["txtphoto"]["name"] == null) {

} else {

$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["txtphoto"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["txtphoto"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["txtphoto"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["txtphoto"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}

if ($_FILES["txtphoto"]["name"] == null) {

	$today_date = date ("Y-m-d");
	$today_time = date ("H:i:s");
	
	$sql = "UPDATE member SET today_date = '".$today_date."',
			today_time = '".$today_time."',	
			title = '".$_POST["txttitle"]."' ,
			password = '".$_POST["txtpassword"]."' ,
			status = '".$_POST["txtstatus"]."' ,
			first_name = '".$_POST["txtfirst_name"]."' ,
			last_name = '".$_POST["txtlast_name"]."' ,
			gender = '".$_POST["txtgender"]."' ,
			birthday = '".$_POST["txtbirthday"]."' ,
			age = '".$_POST["txtage"]."' ,
			race = '".$_POST["txtrace"]."' ,
			id_card = '".$_POST["txtid_card"]."' ,
			passport= '".$_POST["txtpassport"]."',
			house_no = '".$_POST["texthouse_no"]."' ,
			build = '".$_POST['txtbuild']."',
			floor = '".$_POST['txtfloor']."',
			room_no = '".$_POST['txtroom_no']."',
			lane = '".$_POST['txtlane']."',
			road = '".$_POST['txtroad']."',
			village_no = '".$_POST['txtvillage_no']."',
			sub_district = '".$_POST['txtsub_district']."',
			district = '".$_POST['txtdistrict']."',
			province = '".$_POST['txtprovince']."',
			country = '".$_POST['txtcountry']."',
			postal_code = '".$_POST['txtpostal_code']."',
			home_phone = '".$_POST['txthome_phone']."',
			office_phone = '".$_POST['txtoffice_phone']."',
			mobile_phone1 = '".$_POST['txtmobile_phone1']."',
			mobile_phone2 = '".$_POST['txtmobile_phone2']."',
			email = '".$_POST['txtemail']."',
			facebook = '".$_POST['txtfacebook']."',
			homepage = '".$_POST['txthomepage']."',
			name_office = '".$_POST['txtname_office']."',
			category = '".$_POST['txtcategory']."',
			department = '".$_POST['txtdepartment']."',
			division = '".$_POST['txtdivision']."',
			position = '".$_POST['txtposition']."',
			degree= '".$_POST['txtdegree']."',
			identification_num = '".$_POST['txtidentification_num']."',
			beginworkdate = '".$_POST['txtbeginworkdate']."',
			endworkdate = '".$_POST['txtendworkdate']."',
			reasons_leaving = '".$_POST['txtreasons_leaving']."',
			name_person = '".$_POST['txtname_person']."',
			address_person = '".$_POST['txtaddress_person']."',
			relationship = '".$_POST['txtrelationship']."',
			phone_person = '".$_POST['txtphone_person']."',
			primaryschool = '".$_POST['txtprimaryschool']."',
			secondaryschool = '".$_POST['txtsecondaryschool']."',
			professional_sentences = '".$_POST['txtprofessional_sentences']."',
			higher_education = '".$_POST['txthigher_education']."',
			special_education = '".$_POST['txtspecial_education']."',
			type_education = '".$_POST['txttype_education']."',
			name_certificate = '".$_POST['txtname_certificate']."',
			facuity = '".$_POST['txtfacuity']."',
			major = '".$_POST['txtmajor']."',
			program = '".$_POST['txtprogram']."',
			institution_name = '".$_POST['txtinstitution_name']."',
			beginstudy = '".$_POST['txtbeginstudy']."',
			graduate = '".$_POST['txtgraduate']."'

			WHERE id = '".$_POST["txtid"]."' ";

	$query = mysqli_query($conn,$sql);

	if($query) {
	 echo "Record update successfully";
	}
	
} else {

	$today_date = date ("Y-m-d");
	$today_time = date ("H:i:s");
	
	$sql = "UPDATE member SET today_date = '".$today_date."',
			today_time = '".$today_time."',		
			photo = '".basename($_FILES["txtphoto"]["name"])."',
			title = '".$_POST["txttitle"]."' ,
			password = '".$_POST["txtpassword"]."' ,
			status = '".$_POST["txtstatus"]."' ,
			first_name = '".$_POST["txtfirst_name"]."' ,
			last_name = '".$_POST["txtlast_name"]."' ,
			gender = '".$_POST["txtgender"]."' ,
			birthday = '".$_POST["txtbirthday"]."' ,
			age = '".$_POST["txtage"]."' ,
			race = '".$_POST["txtrace"]."' ,
			id_card = '".$_POST["txtid_card"]."' ,
			passport= '".$_POST["txtpassport"]."',
			house_no = '".$_POST["texthouse_no"]."' ,
			build = '".$_POST['txtbuild']."',
			floor = '".$_POST['txtfloor']."',
			room_no = '".$_POST['txtroom_no']."',
			lane = '".$_POST['txtlane']."',
			road = '".$_POST['txtroad']."',
			village_no = '".$_POST['txtvillage_no']."',
			sub_district = '".$_POST['txtsub_district']."',
			district = '".$_POST['txtdistrict']."',
			province = '".$_POST['txtprovince']."',
			country = '".$_POST['txtcountry']."',
			postal_code = '".$_POST['txtpostal_code']."',
			home_phone = '".$_POST['txthome_phone']."',
			office_phone = '".$_POST['txtoffice_phone']."',
			mobile_phone1 = '".$_POST['txtmobile_phone1']."',
			mobile_phone2 = '".$_POST['txtmobile_phone2']."',
			email = '".$_POST['txtemail']."',
			facebook = '".$_POST['txtfacebook']."',
			homepage = '".$_POST['txthomepage']."',
			name_office = '".$_POST['txtname_office']."',
			category = '".$_POST['txtcategory']."',
			department = '".$_POST['txtdepartment']."',
			division = '".$_POST['txtdivision']."',
			position = '".$_POST['txtposition']."',
			degree= '".$_POST['txtdegree']."',
			identification_num = '".$_POST['txtidentification_num']."',
			beginworkdate = '".$_POST['txtbeginworkdate']."',
			endworkdate = '".$_POST['txtendworkdate']."',
			reasons_leaving = '".$_POST['txtreasons_leaving']."',
			name_person = '".$_POST['txtname_person']."',
			address_person = '".$_POST['txtaddress_person']."',
			relationship = '".$_POST['txtrelationship']."',
			phone_person = '".$_POST['txtphone_person']."',
			primaryschool = '".$_POST['txtprimaryschool']."',
			secondaryschool = '".$_POST['txtsecondaryschool']."',
			professional_sentences = '".$_POST['txtprofessional_sentences']."',
			higher_education = '".$_POST['txthigher_education']."',
			special_education = '".$_POST['txtspecial_education']."',
			type_education = '".$_POST['txttype_education']."',
			name_certificate = '".$_POST['txtname_certificate']."',
			facuity = '".$_POST['txtfacuity']."',
			major = '".$_POST['txtmajor']."',
			program = '".$_POST['txtprogram']."',
			institution_name = '".$_POST['txtinstitution_name']."',
			beginstudy = '".$_POST['txtbeginstudy']."',
			graduate = '".$_POST['txtgraduate']."'

			WHERE id = '".$_POST["txtid"]."' ";

	$query = mysqli_query($conn,$sql);

	if($query) {
	 echo "Record update successfully";
	}
}
	mysqli_close($conn);
	header("Location: ../detail_profile.php?id=".$_POST["txtid"]."");
?>