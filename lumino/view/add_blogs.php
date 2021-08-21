<form action="fuction/insert_blogs.php" method="POST" enctype="multipart/form-data">

	<input class="form-control" type="text" name="address" placeholder="Enter adress"><br>

	<textarea class="form-control" name="description">Description</textarea><br>
	<label>Choose Category</label>

	<select name="category" class="form-control">
		<option selected="" disabled="">Choose</option>
		<?php 
		$select_cat = "SELECT * FROM category_blog";
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