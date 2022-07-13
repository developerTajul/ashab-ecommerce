<?php require_once('admin-header.php'); ?>

<div class="container-fluid page-body-wrapper">

  <?php require_once('admin-sidebar.php'); ?>
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Products</h4>
				<p class="card-description">Get all users info from here</p>
				<table class="table table-bordered">
				<thead>
					<tr>
						<th>Sl. Num</th>
						<th>Name</th>
						<th>Sale Price</th>
						<th>Regular Price</th>
						<th>Quantity</th>
						<th>Photo</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$products_query = mysqli_query($con, "SELECT * FROM product");	
					$products = mysqli_fetch_all($products_query, MYSQLI_ASSOC);
					$number = 1;
					foreach($products as $product):
					?>
						<tr>
							<td><?php echo $number; ?></td>
							<td><?php echo $product['name']; ?></td>
							<td><?php echo $product['sale_price']; ?></td>
							<td><?php echo $product['regular_price']; ?></td>
							<td><?php echo $product['qty']; ?></td>
							<td><img src="../uploads/products/<?php echo $product['thumbnail']; ?>" alt="Product Name"></td>
							<td>
								<?php
								if( $product['status'] == 0 ): ?>
									<a class="btn btn-success" href="?product_status=deactive&id=<?php echo $product['product_id']; ?>">Active</a>
								<?php 
								else: ?>
									<a class="btn btn-danger" href="?product_status=active&id=<?php echo $product['product_id']; ?>">Deactive</a>
								<?php 
								endif; ?>
							</td>
							<td><a href="product_edit.php?product_id=<?php echo $product['product_id']; ?>">Edit</a> | <a href="?product_delete=<?php echo $product['product_id']; ?>">Delete</a></td>
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