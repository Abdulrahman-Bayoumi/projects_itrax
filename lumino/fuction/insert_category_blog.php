<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$name = $_POST['name'];
	$nsert_categories= "INSERT INTO `category_blog`(`name`) VALUES ('$name')";
	$conn->query($nsert_categories);
	header("Location:../category_blog.php");
}

?>