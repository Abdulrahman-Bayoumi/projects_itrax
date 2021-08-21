<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$id = $_POST['id'];
	$name = $_POST['name_blog'];
	$adress = $_POST['address'];
	$discription = $conn->real_escape_string($_POST['dateils']);
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");

	if(!empty($image_name)){
		$update_image = "UPDATE blogs SET image = '$image_name' WHERE id = $id";
		$conn->query($update_image); 

	}

	$update_blog = "UPDATE `blogs` SET  `address` ='$adress',
                           `dateils`='$discription' WHERE id='$id' ";
	$conn->query($update_blog);
	

	header("Location:../blogs.php");
}

?>