<?php
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$id = $_POST['id'];
    $Id= $_POST['id'];
    $username= $_POST['username'];
    $password = $_POST['password'];
    $imagename = $_FILES['image']['name'];
    $imagetamp = $_FILES['image']['tmp_name'];
    move_uploaded_file($imagetamp, "../images/$imagename");
    if(!empty($imagename))
    {
		$update_image = "UPDATE admin SET image = '$imagename' WHERE id = $Id";
		$conn->query($update_image); 

	}
    
	$update_admin = "UPDATE admin SET username = '$username' , password = '$password' WHERE id = $Id";
	$conn->query($update_admin);
	

	header("Location:../index.php");
}


?>