<?php require_once('admin-header.php'); ?>

<div class="container-fluid page-body-wrapper">

  <?php require_once('admin-sidebar.php'); ?>
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Users</h4>
				<p class="card-description">Get all users info from here</p>
				<table class="table table-bordered">
				<thead>
					<tr>
						<th> Sl. Number </th>
						<th> Name </th>
						<th> Username </th>
						<th> Email </th>
						<th> Photo </th>
						<th> Status </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$users_query = mysqli_query($con, "SELECT * FROM users");	
					$users = mysqli_fetch_all($users_query, MYSQLI_ASSOC);
					$number = 1;
					foreach($users as $user):
					?>
						<tr>
							<td><?php echo $number; ?></td>
							<td><?php echo $user['name']; ?></td>
							<td><?php echo $user['username']; ?></td>
							<td><?php echo $user['email']; ?></td>
							<td><img src="../uploads/users/<?php echo $user['thumbnail']; ?>" alt="Author Name"></td>
							<td>
								<?php
								if( $user['status'] == 0 ): ?>
									<a class="btn btn-success" href="?user_status=deactive&id=<?php echo $user['id']; ?>">Active</a>
								<?php 
								else: ?>
									<a class="btn btn-danger" href="?user_status=active&id=<?php echo $user['id']; ?>">Deactive</a>
								<?php 
								endif; ?>
							</td>
							<td><a href="user_edit.php?username=<?php echo $user['username']; ?>">Edit</a> | <a href="?user_delete=<?php echo $user['username']; ?>">Delete</a></td>
						</tr>
					<?php 
					$number++;
					endforeach; ?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php require_once('admin-footer.php');