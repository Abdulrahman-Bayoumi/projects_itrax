<form action="fuction/insert_user.php" method="POST" enctype="multipart/form-data">
	<input class="form-control" type="text" name="name" placeholder="Enter Name"><br>

	<input class="form-control" type="password" name="password" placeholder="Enter Password"><br>

	<input class="form-control" type="text" name="phone" placeholder="Enter phone"><br>
	<input class="form-control" type="email" name="email" placeholder="Enter email"><br>

	<select name="gendar" class="form-control">
		<option selected="" disabled="">Choose</option>
		<option value="male">male</option>
		<option value="female">female</option>
	</select><br>
	<input type="submit" class="btn btn-primary" name="submit" value="ADD">
</form>