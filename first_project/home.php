<?php
session_start();
 require "lib.php";
if(empty($_SESSION['user'])){
    header("LOCATION:login.php");
}
   $userrole=userrole();
    $data = Alldata();
    
    require "design/home.php";





?>