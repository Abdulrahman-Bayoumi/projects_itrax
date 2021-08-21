<?php
spl_autoload_register(function($name){
   require $name.'.php'; 
});
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$firstname = $_POST['name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gendar'];
	$date = date("Y-m-d");
	
	 if($gender=='male'){
		$ch_gander = 0 ;
		}else {
              $ch_gander = 1 ;
		}
	$db = new db_user();
	$db->create($firstname ,$password ,$email , $phone ,$ch_gander ,$date);
	header("Location:../users.php");
}

?>