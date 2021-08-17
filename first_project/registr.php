<?php
session_start();
if(!empty($_POST['user'])){
    hrader("LOCATION:home.php");
}
 require "lib.php";
if(isset($_POST['name']))
{
   $username = $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST["password"];
   $repass = $_POST["repassword"];
   $R = $_POST['role'];
   $type = $_FILES['img']['type'];
   $tmp = $_FILES['img']['tmp_name'];
   $typeofer = explode('/',$type);
   $ext=$typeofer[1];
   $imgfullname = $username.'.'.$ext;
  //$newpass = hash_pass($pass);
  if($repass==$pass){
   $rtn= register($username,$email,$pass,$imgfullname,$R);
   if($rtn){
    move_uploaded_file($tmp,"userimages/".$username.'.'.$ext);
    echo "successfuly";
   }else{
    echo "invalid";
   }}else{
    echo "invalid comfirm password";
   }
   
   
}


 require "design/registr.html";
?>





