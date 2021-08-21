<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");
	$insert_Admin = "INSERT INTO `admin`( `username`, `password`, `image`) VALUES ('$username','$password','$image_name')";
	$conn->query($insert_Admin);
	header("Location:../index.php");
}

?>