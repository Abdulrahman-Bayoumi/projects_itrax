	
				<br><br>
				<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">View</th>
      <th scope="col">Date</th>
      <th scope="col">Control</th>
    </tr>
  </thead>
  <tbody>
<?php 
$index = 1;
$select_message = "SELECT * FROM messade";
$result_message = $conn->query($select_message);
foreach ($result_message as $key)
{
	?>
	 <tr>
      <th><?php echo $index++ ?></th>
      <td><?php echo $key['name']; ?></td>
      <td><?php echo $key['email']; ?></td>
      <td><?php if($key['view'] == "0"){echo '<span style="color:red";>Not Seen </span>';}else{echo '<span style="color:green;">Seen </span>';}?>
      </td>
      <td><?php echo $key['m_data']; ?></td>
      <td>
      	<a href="?do=view&id=<?php echo $key['id']; ?>" class="btn btn-warning">View</a>
      	<!--- Delete  modal --->

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
        Are You Sure To Delete Message From( <span style="color: red;"><?php echo $key['name']; ?></span>)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="fuction/delete_message.php?id=<?php echo $key['id']; ?>" class="btn btn-danger">Confirm</a>
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