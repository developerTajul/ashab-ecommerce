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
						<th> Slug </th>
						<th> Description </th>
						<th> Photo </th>
						<th> Status </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$users_query = mysqli_query($con, "SELECT * FROM categories");	
					$cats = mysqli_fetch_all($users_query, MYSQLI_ASSOC);
					$number = 1;
					foreach($cats as $cat):
					?>
						<tr>
							<td><?php echo $number; ?></td>
							<td><?php echo $cat['cat_name']; ?></td>
							<td><?php echo $cat['cat_slug']; ?></td>
							<td><?php echo $cat['cat_desc']; ?></td>
							<td><img src="../uploads/categories/<?php echo $cat['cat_thumbnail']; ?>" alt="Author Name"></td>
							<td>
								<?php
								if( $cat['cat_status'] == 0 ): ?>
									<a class="btn btn-success" href="?cat_status=deactive&id=<?php echo $cat['cat_id']; ?>">Active</a>
								<?php 
								else: ?>
									<a class="btn btn-danger" href="?cat_status=active&id=<?php echo $cat['cat_id']; ?>">Deactive</a>
								<?php 
								endif; ?>
							</td>
							<td><a href="category_edit.php?cat_slug=<?php echo $cat['cat_slug']; ?>">Edit</a> | <a href="?cat_delete=<?php echo $cat['cat_slug']; ?>">Delete</a></td>
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