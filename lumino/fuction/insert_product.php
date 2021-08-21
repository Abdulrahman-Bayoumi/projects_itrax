<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$name = $_POST['name'];
	$price = $_POST['price'];
	$discount = $_POST['discount'];
	$description = $_POST['description'];
	$stock = $_POST['stock'];
	$date = date("Y-m-d");
	$category = $_POST['category'];
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");
	$insert_product = "INSERT INTO `products`(`name`, `price`, `discount`, `image`, `datails`, `category`, `stock`,`u_data`)
                                       VALUES ('$name','$price','$discount ','$image_name','$description','$category','$stock','$date')";
	$conn->query($insert_product);
	header("Location:../products.php");
}

?>