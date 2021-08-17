<?php

function register($N,$E,$P,$IM , $R){
    $conn =mysqli_connect('localhost','root','','first_pro');
     mysqli_query($conn ,"INSERT INTO `user`( `name`, `email`, `password`, `img`, `role_user`) VALUES ('$N','$E','$P','$IM' ,'$R')");
    $res = mysqli_affected_rows($conn);
    if($res==1){
        return true;
    }else{
        return false;
    }
}
function login($E,$P){
     $conn = mysqli_connect('localhost','root','','first_pro');
     $msq = mysqli_query($conn ,"SELECT * FROM `user`  WHERE `email` ='$E' AND `password` = '$P' ");
      $rsl = mysqli_fetch_assoc($msq);
     return $rsl;
}
/*function hash_pass($P){
  return sha1($P);
}*/
function Alldata(){
     $conn = mysqli_connect('localhost','root','','first_pro');
     $msq = mysqli_query($conn ,"SELECT `id`, `name`, `email` ,`img` FROM `user` ");
     $data=[];
      while($rsl = mysqli_fetch_assoc($msq)){
        $data[] = $rsl;
      }
     return $data;
}
function deletuser ($I){
    $conn =mysqli_connect('localhost','root','','first_pro');
     mysqli_query($conn ,"DELETE FROM `user` WHERE `id` = '$I'");
    $res = mysqli_affected_rows($conn);
    if($res==1){
        return true;
    }else{
        return false;
    }
}
function userrole(){
    return $_SESSION['user']['role_user'];
}
function getuserdata($id){
     $conn = mysqli_connect('localhost','root','','first_pro');
     $msq = mysqli_query($conn ,"SELECT `id`, `name`, `email` ,`img` FROM `user` WHERE `id`='$id' ");
    $rsl = mysqli_fetch_assoc($msq);
     return $rsl;
}
function updata ($id ,$name ,$email,$pass,$img){
    $conn =mysqli_connect('localhost','root','','first_pro');
    $sql = "UPDATE `user` SET";
    if(!empty($name)){
        $sql .= " `name` ='$name'";
    }
     if(!empty($email)){
        $sql .= ",`email` ='$email'";
    }
     if(!empty($pass)){
        $sql .= ",`password` ='$pass'";
    }
     if(!empty($img)){
        $sql .= ",`img` ='$img'";
    }
     $sql .="WHERE `id`='$id' ";
     mysqli_query($conn ,$sql);
    $res = mysqli_affected_rows($conn);
    if($res==1){
        return true;
    }else{
        return false;
    }
}

?>
