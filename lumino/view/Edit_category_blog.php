<?php 
$id = $_GET['id'];
$select_update = "SELECT * FROM category_blog WHERE id = $id";
$result_update = $conn->query($select_update);
$array = $result_update->fetch_assoc();

?>				
<form action="fuction/update_category_blog.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input class="form-control" type="text" name="name"  value="<?php echo $array['name'];?>" ><br>
<input type="submit" class="btn btn-primary" name="submit" value="Edit">
				</form>