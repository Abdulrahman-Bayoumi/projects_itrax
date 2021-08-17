<?php
session_start();
 require "lib.php";
if(empty($_SESSION['user'])){
    header("LOCATION:login.php");
}

if(isset($_POST['name']))
 {
 $userid =$_POST['id'];
 $name =$_POST ['name'];
 $email = $_POST ['email'];
 $pass = $_POST ['password'];
 if(!empty($_FILES['img']['tmp_name']))
 {
  $tmp = $_FILES['img']['tmp_name'];
 $imgtype = $_FILES['img']['type'];
 $type = explode('/',$imgtype);
 $ext = $type[1];
 $newname = $name.'.'.$ext ;
 move_uploaded_file('userimages/',$newname);
 }else{
  $newname ='';
 }
 $res=updata ($userid ,$name ,$email,$pass,$newname);
 if($res){
  header("LOCATION:home.php");
 }else{
    echo "invalide";
 }
}{
$id = $_GET['id'];
$userdata = getuserdata($id);
}




 require "design/updata.php";

?>