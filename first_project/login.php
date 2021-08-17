<?php
session_start();
if(!empty($_POST['user'])){
    hrader("LOCATION:home.php");
}
 require "lib.php";
if(isset($_POST['email'])){
 $email = $_POST['email'];
 $pass = $_POST["password"];
// $newpass = hash_pass($pass);
 $userdata = login($email ,$pass);

 if(!empty($userdata)){
  $_SESSION['user'] = $userdata;
  header("LOCATION: home.php");
 }else
 {
  echo "invalid user or password";
 }
 
}


 require "design/login.html";

?>