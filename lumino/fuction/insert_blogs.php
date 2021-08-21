<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$adress = $_POST['address'];
	$description = $_POST['description'];
	$date = date("Y-m-d");
	$category = $_POST['category'];
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");
	$insert_product = "INSERT INTO `blogs`( `address`,  `image`, `dateils`, `id_category`, `u_data`)
                                       VALUES ('$adress','$image_name','$description','$category','$date')";
	$conn->query($insert_product);
	header("Location:../blogs.php");
}

?>