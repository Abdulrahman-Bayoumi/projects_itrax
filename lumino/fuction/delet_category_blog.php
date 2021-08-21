<?php
include_once 'connection.php';
$id = $_GET['id'];
$delete_category = "DELETE FROM category_blog WHERE id = $id";
$conn->query($delete_category);
header("Location:../category_blog.php"); 

?>