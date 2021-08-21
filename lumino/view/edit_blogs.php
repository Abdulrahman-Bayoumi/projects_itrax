<?php 
$id = $_GET['id'];
$select_update = "SELECT * FROM blogs WHERE id = $id";
$result_update = $conn->query($select_update);
$array = $result_update->fetch_assoc();

?>				

	<form action="fuction/updata_blogs.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">

		<input class="form-control" type="text" name="address" value="<?php echo $array['address'];?>"><br>

		<textarea class="form-control" name="dateils"> <?php echo $array['dateils']; ?></textarea>
		<img style="width: 100px;height: 100px;" src="images/<?php echo $array['image']; ?>">
		<input type="file" name="image"><br>
		<input type="submit" class="btn btn-primary" name="submit" value="Edit">
	</form>