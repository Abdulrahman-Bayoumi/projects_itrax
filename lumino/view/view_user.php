<a href="?do=add" class="btn btn-info">Add New User</a>
				<br><br>
				<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">Control</th>
      
    </tr>
  </thead>
  <tbody>
<?php 
$index = 1;
$select_users = "SELECT * FROM `users`";
$result_users = $conn->query($select_users);
foreach ($result_users as $key) {
	?>
	 <tr>
      <th><?php echo $index++ ?></th>
      <td><?php echo $key['name']; ?></td>
      <td><?php echo $key['email']; ?></td>
      <td><?php echo $key['phone']; ?></td>
      <td><?php if($key['gender'] == "0"){echo "Male";}else{echo "Female";} ?></td>
      <td>
      <a href="?do=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning">Edit</a>
<!--- Delete  modal -->
      	<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $key['id'];?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirm delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure To Delete User( <span style="color: red;"><?php echo $key['name']; ?></span>)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="fuction/delet_users.php?id=<?php echo $key['id']; ?>" class="btn btn-danger">Confirm</a>
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