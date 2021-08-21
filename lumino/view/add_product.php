<form action="fuction/insert_product.php" method="POST" enctype="multipart/form-data">
	<input class="form-control" type="text" name="name" placeholder="Enter Name"><br>

	<input class="form-control" type="text" name="price" placeholder="Enter Price"><br>

	<input class="form-control" type="text" name="discount" placeholder="Enter Discount"><br>

	<textarea class="form-control" name="description">Description</textarea><br>
	<input type="number" name="stock" class="form-control" placeholder="Stock">
	<label>Choose Category</label>

	<select name="category" class="form-control">
		<option selected="" disabled="">Choose</option>
		<?php 
		$select_cat = "SELECT * FROM categories";
		$result_cat = $conn->query($select_cat);
		foreach ($result_cat as $key) {
		?>
			<option value="<?php echo $key['id']; ?>"><?php echo $key['name']; ?></option>
		<?php 	
		}
		 ?>
		
	</select><br>
	
	<label>Upload Image</label>
	<input type="file" name="image"><br>
	<input type="submit" class="btn btn-primary" name="submit" value="ADD">
</form>