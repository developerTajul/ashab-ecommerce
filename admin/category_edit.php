<?php require_once('admin-header.php'); ?>

<div class="container-fluid page-body-wrapper">

<?php require_once('admin-sidebar.php'); ?>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <?php 
                if( isset( $_GET['cat_slug'] ) ){
                    $current_cat_slug = $_GET['cat_slug'];
                    $sql = "SELECT * FROM categories WHERE cat_slug='$current_cat_slug'";
                    $rows = mysqli_query($con, $sql);
                    $single_row = mysqli_fetch_assoc( $rows  );
                }


                ?>
                <h4 class="card-title">Edit Category</h4>
                <p class="card-description"> Update Category Info </p>
                <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                    <!-- name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="update_cat_name" class="form-control" id="name" value="<?php echo $single_row['cat_name']; ?>" placeholder="Update Name">
                    </div>

                    <!-- slug -->
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text"  name="update_cat_slug" value="<?php echo $single_row['cat_slug']; ?>"  class="form-control" id="slug" placeholder="Update Username">
                    </div>

                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email">Description</label><br />
                        <textarea name="update_cat_desc" id="" cols="30" rows="10"><?php echo $single_row['cat_desc']; ?></textarea>
                    </div>

                    <!-- Thumbnail -->
                    <div class="form-group">
                        <label>File upload</label> <br />
                        <input  type="file" name="update_cat_thumbnail" /><br /><br />
                        <img style="width:250px; height: 250px;" src="../uploads/<?php echo $single_row['cat_thumbnail']; ?>"  alt="">
                    </div>

                    <button type="submit" class="btn btn-success mr-2" name="update_category_info">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

<?php require_once('admin-footer.php');