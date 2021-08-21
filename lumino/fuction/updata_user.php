<?php
spl_autoload_register(function($name){
   require $name.'.php'; 
});
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$id = $_POST['id'];
	$firstname = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$db =new db_user();
	$db -> update($firstname ,$password,$email,$phone,$id);
	header("Location:../users.php");
}

?>