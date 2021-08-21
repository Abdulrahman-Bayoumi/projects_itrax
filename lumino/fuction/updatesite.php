<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$facebook = $_POST['facebook'];
	$twitter = $_POST['twitter'];
	$instgram = $_POST['instgram'];

	$image_name1 = $_FILES['logo1']['name'];
	$image_temp1 = $_FILES['logo1']['tmp_name'];
	move_uploaded_file($image_temp1, "../images/$image_name1");
	$image_name2 = $_FILES['logo2']['name'];
	$image_temp2 = $_FILES['logo2']['tmp_name'];
	move_uploaded_file($image_temp2, "../images/$image_name2");
	$image_name3 = $_FILES['logo3']['name'];
	$image_temp3 = $_FILES['logo3']['tmp_name'];
	move_uploaded_file($image_temp3, "../images/$image_name3");
	$image_name4 = $_FILES['logo4']['name'];
	$image_temp4 = $_FILES['logo4']['tmp_name'];
	move_uploaded_file($image_temp4, "../images/$image_name4");
    $image_name5 = $_FILES['logo5']['name'];
	$image_temp5 = $_FILES['logo5']['tmp_name'];
	move_uploaded_file($image_temp5, "../images/$image_name5");



	if(!empty($image_name1)){
		$update_image1 = "UPDATE site_info SET logo1 = '$image_name1'";
		$conn->query($update_image1); 

	}
	if(!empty($image_name2)){
		$update_image2 = "UPDATE site_info SET logo2 = '$image_name2'";
		$conn->query($update_image2); 

	}
	if(!empty($image_name3)){
		$update_image3 = "UPDATE site_info SET logo3 = '$image_name3'";
		$conn->query($update_image3);}
		
    if(!empty($image_name4)){
		$update_image4 = "UPDATE site_info SET logo4 = '$image_name4'";
		$conn->query($update_image4);


	}
	if(!empty($image_name5)){
		$update_image5 = "UPDATE site_info SET logo5 = '$image_name5'";
		$conn->query($update_image5); 

	}

	$update_site = "UPDATE site_info SET site_name = '$name' , address = '$address' , phone = '$phone' , facebook = '$facebook',twitter = '$twitter' , instgram = '$instgram'";
	$conn->query($update_site);
	
header("Location:../site_info.php");
}

?>