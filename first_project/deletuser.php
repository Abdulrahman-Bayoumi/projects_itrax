<?php
session_start();
 require "lib.php";
if(empty($_SESSION['user'])){
    header("LOCATION:login.php");
}


    $id=$_GET['id'];
    if($_SESSION['user']['id']==$id){
        echo "can not delet";
    }else{
    if(deletuser($id)){
         header("LOCATION:home.php");
    }{
        echo "error delet";
    }
    }





?>