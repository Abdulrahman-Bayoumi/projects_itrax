<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$id =$_POST['id'];
	$name = $_POST['name'];
	$update_categories = "UPDATE category_blog SET name = '$name' WHERE id = $id";
	$conn->query($update_categories);
	header("Location:../category_blog.php");
}

?>