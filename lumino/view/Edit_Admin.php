
<?php 
$id = $_GET['id'];
$select_Edit = "SELECT * FROM admin WHERE id = $id";
$result_Edit = $conn->query($select_Edit);
$array = $result_Edit->fetch_assoc();

?>				
<form action="fuction/updata.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input class="form-control" type="text" name="username" placeholder="Enter username" value="<?php echo $array['username'];?>" ><br>
<input class="form-control" type="password" name="password" placeholder="Enter Password" value="<?php echo $array['password'];?>"><br>
<img style="width: 100px;height: 100px;" src="images/<?php echo $array['image']; ?>">
<input type="file" name="image"><br>
<input type="submit" class="btn btn-primary" name="submit" value="Edit">
				</form>

