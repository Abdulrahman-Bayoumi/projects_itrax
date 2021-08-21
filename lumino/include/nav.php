<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">
							<?php
$select_mes = "SELECT * FROM messade WHERE view = '0'";
$result_mes = $conn->query($select_mes);
$count = $result_mes->num_rows;
echo $count;


?>							

						</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="./messages.php">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>