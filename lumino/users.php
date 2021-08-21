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
				<li class="active">Users</li>
			</ol>
		</div><!--/.row-->

		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Users</h1>
  <?Php  
    if(!$_GET['do'])
{
  include 'view/view_user.php';
}elseif($_GET['do'] == "add"){
  include 'view/add_user.php';

}elseif($_GET['do'] == "edit"){
  include 'view/Edit_user.php';
} 
    ?>
			</div>
		</div><!--/.row-->
  
<?php include_once 'include/footer.php'; 
}

?>