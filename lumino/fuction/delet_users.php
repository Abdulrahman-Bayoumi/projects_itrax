<?php
spl_autoload_register(function($name){
   require $name.'.php'; 
});
include_once 'connection.php';
$id = $_GET['id'];
$db = new db_user();
$db->delet($id);
header("Location:../users.php"); 

?>