<div class="col-md-6">
	<div class="card my-4">
		<h5 class="card-header">Login</h5>
	<div class="card-body">

	<form action="" method="post">
		<div class="input-group">
			<input type="text" class="form-control" name="username" placeholder="Username">
		</div>
		<br>
		<div class="input-group">
			<input type="text" class="form-control" name="password" placeholder="Password">
		</div>
		<br>
		<div class="input-group">
			<button class="btn btn-secondary" type="submit">Go!</button>
		</div>
	</form>

	</div>
	</div>
</div>

<div class="col-md-6">
	<div class="card my-4">
		<h5 class="card-header">Data User Login</h5>
	<div class="card-body">

	<table class="table table-striped">
	  <tr>
	  	<th>No</th>
	  	<th>Nama User</th>
	  	<th>Password (qwerty)</th>
	  	<th>Photo</th>
	  </tr>
	  <?php $no=1; foreach($detail->getAllComment() as $row) { ?>
	  <tr>	
	  	<td><?= $no ?></td>
	  	<td><?= $row['username'] ?></td>
	  	<td><?= $row['password'] ?></td>
	  	<td><?= cl_image_tag($row['photo'])?></td>
	  </tr>
	  <?php $no++; } ?>
	</table>

	</div>
	</div>
</div>
