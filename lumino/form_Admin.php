<?php
session_start();
if(!isset($_SESSION['username'])){

header("Location:login.php");

}else
{
	
include_once 'include/header.php';
include_once 'include/nav.php';
include_once 'include/sidebar.php';
 ?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"> Add Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">

				<form action="fuction/insert_Admin.php" method="POST" enctype="multipart/form-data">
					<input class="form-control" type="text" name="username" placeholder="Enter username"><br>
					<input class="form-control" type="password" name="password" placeholder="Enter Password"><br>
					<label>Upload Image</label>
					<input type="file" name="image"><br>
					<input type="submit" class="btn btn-primary" name="submit" value="ADD">
				</form>

		</div>
		</div><!--/.row-->		
		
<?php include_once 'include/footer.php';
}


  ?>
