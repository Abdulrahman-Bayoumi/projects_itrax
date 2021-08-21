<a href="?do=add" class="btn btn-info">Add New Admin</a>
			<br><br>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Image</th>
			<th scope="col">Contro1</th>
</tr>
  </thead>
  <tbody>
		<?php
		$index = 1;
     $select_admins = "SELECT * FROM admin";
    $result_admins = $conn->query($select_admins);
   foreach ($result_admins as $key) {
	?>
     <tr>
      <th><?php echo $index ++; ?></th>
      <td><?php echo $key ['username']; ?></td>
      <td><img style="width: 50px;height: 50px;" src="images/<?php echo $key['image']; ?>"></td>
      <td>
  <a href="?do=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning">Edit</a>
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $key['id'];?>">
  Delete
</button>
<div class="modal fade" id="exampleModal<?php echo $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure To Delete Username( <span style="color: red;"><?php echo $key['username']; ?></span>)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <a href="fuction/delet_Admin.php?id=<?php echo $key['id']; ?>" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
			</td>
			   
    </tr>
		<?php 	
    }
       ?>  	
		
  </tbody>
</table>