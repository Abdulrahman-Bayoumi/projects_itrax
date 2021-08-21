<?php 
$id = $_GET['id'];
$select_update = "SELECT * FROM products WHERE id = $id";
$result_update = $conn->query($select_update);
$array = $result_update->fetch_assoc();

?>				

	<form action="fuction/updata_product.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input class="form-control" type="text" name="name"  value="<?php echo $array['name'];?>" ><br>

		<input class="form-control" type="text" name="price" value="<?php echo $array['price'];?>"><br>

		<input class="form-control" type="number" name="stock" value="<?php echo $array['stock'];?>"><br>

		<input class="form-control" type="text" name="discount"  value="<?php echo $array['discount'];?>"><br>

		<textarea class="form-control" name="datails"> <?php echo $array['datails']; ?></textarea>

		<img style="width: 100px;height: 100px;" src="images/<?php echo $array['image']; ?>">
		<input type="file" name="image"><br>
		<input type="submit" class="btn btn-primary" name="submit" value="Edit">
	</form>