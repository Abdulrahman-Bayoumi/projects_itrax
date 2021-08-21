
				<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th scope="col">phone</th>
      <th scope="col">facebook</th>
      <th scope="col">twitter</th>
      <th scope="col">instgram</th>
      <th scope="col">logo1</th>
      <th scope="col">logo2</th>
			<th scope="col">logo3</th>
			<th scope="col">logo4</th>
			<th scope="col">logo5</th>
      <th scope="col">Control</th>
      
    </tr>
  </thead>
  <tbody>
<?php 
$index = 1;
$select_info = "SELECT * FROM site_info";
$result_info = $conn->query($select_info);
foreach ($result_info as $key) {
	?>
	 <tr>
      <th><?php echo $index++ ?></th>
      <td><?php echo $key['site_name']; ?></td>
      <td><?php echo $key['email']; ?></td>
      <td><?php echo $key['address']; ?></td>
        <td><?php echo $key['phone']; ?></td>
      <td><?php echo $key['facebook']; ?></td>
      <td><?php echo $key['twitter']; ?></td>
      <td><?php echo $key['instgram']; ?></td>
      <td><img style="width: 50px;height: 50px;" src="images/<?php echo $key['logo1']; ?>"></td>
			<td><img style="width: 50px;height: 50px;" src="images/<?php echo $key['logo2']; ?>"></td>
			<td><img style="width: 50px;height: 50px;" src="images/<?php echo $key['logo3']; ?>"></td>
			<td><img style="width: 50px;height: 50px;" src="images/<?php echo $key['logo4']; ?>"></td>
      <td><img style="width: 50px;height: 50px;" src="images/<?php echo $key['logo5']; ?>"></td>
      <td>
      	<a href="?do=edit&id=<?php echo $key['id']; ?>" class="btn btn-warning">Edit</a>   
    </tr>
<?php 	
}
?>  	
  </tbody>
</table>