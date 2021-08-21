<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$name = $_POST['name'];
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");
	$nsert_categories= "INSERT INTO `categories`(`name`,`image`) VALUES ('$name','$image_name')";
	$conn->query($nsert_categories);
	header("Location:../categories.php");
}

?>