<?php 
include_once 'connection.php';
$id = $_GET['id'];
$delete = "DELETE FROM `admin` WHERE id = $id";
$conn->query($delete);
header("Location:../index.php");

?>