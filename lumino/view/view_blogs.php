<a href="?do=add" class="btn btn-info">Add New Product</a>
				<br><br>
				<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">adress</th>
      <th scope="col">Image</th>
      <th scope="col">Details</th>
      <th scope="col">Category</th>
      <th scope="col">Control</th>
      
    </tr>
  </thead>
  <tbody>
<?php 
$index = 1;
$select_products = "SELECT * FROM blogs";
$result_products = $conn->query($select_products);
foreach ($result_products as $key) {
  $id_cat = $key['id_category'];
	?>
	 <tr>
      <th><?php echo $index++ ?></th>
      <td><?php echo $key['address']; ?></td>
      <td><img style="width: 50px;height: 50px;" src="images/<?php echo $key['image']; ?>"></td>
      <td><?php echo $key['dateils']; ?></td>
<?php
$select_cat = "SELECT * FROM `category_blog` WHERE id = $id_cat";
$result_cat = $conn->query($select_cat);
$row_cat = $result_cat->fetch_assoc(); 
?>      
      <td><?php echo $row_cat['name']; ?></td>
      <td>
      	<a href="?do=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning">Edit</a>
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
        Are You Sure To Delete blogs ( <span style="color: red;"><?php echo $key['address']; ?></span>)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="fuction/delet_blog.php?id=<?php echo $key['id']; ?>" class="btn btn-danger">Confirm</a>
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