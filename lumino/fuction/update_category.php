<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$id =$_POST['id'];
	$name = $_POST['name'];
	$imagename = $_FILES['image']['name'];
    $imagetamp = $_FILES['image']['tmp_name'];
    move_uploaded_file($imagetamp, "../images/$imagename");
    if(!empty($imagename))
    {
		$update_image = "UPDATE categories SET image = '$imagename' WHERE id = $id";
		$conn->query($update_image); 

	}
	$update_categories = "UPDATE categories SET name = '$name' WHERE id = $id";
	$conn->query($update_categories);
	
	header("Location:../categories.php");
}

?>