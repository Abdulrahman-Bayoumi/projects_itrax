<?php

class db_user {
    private $conn;
    /* const  $HOSTNAME = 'localhost';
    const  $USERNAME = 'root';
    const  $PASSWORD = '';
    const  $DBNAME = 'ecommerce';*/

    public function __construct(){
        $this->conn = new mysqli('localhost','root','','ecommerce');
    }
    public function create($firstname,$password,$email,$phone,$ch_gander,$date){
        
        $this->conn->query("INSERT INTO `users`( `name`, `password`, `email`, `phone`, `gender`, `u_data`)
                           VALUES ('$firstname','$password','$email','$phone','$ch_gander','$date')");
       return $this->conn->affected_rows;
    }
    public function read(){
         $result=$this->conn->query("SELECT * FROM `users` WHERE id = $id");
         $data=[];
         while($s=$result->fetch_assoc()){
            
            $data[]=$s;
         }
      return $data;
    }
    public function update($firstname,$password,$email,$phone ,$id){
         $this->conn->query("UPDATE `users` SET `name`='$firstname',`password`='$password',`email`='$email',`phone`='$phone' WHERE id = '$id'");
         return $this->conn->affected_rows;die;
    }
    public function delet($id){
         $this->conn->query("DELETE FROM users WHERE id = $id");
         return $this->conn->affected_rows;
    }
    
    
    
    public function __destruct(){
        $this ->conn ->close();
        
    }
}
