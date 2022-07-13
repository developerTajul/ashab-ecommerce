<?php require_once('admin-header.php'); ?>

<div class="container-fluid page-body-wrapper">

<?php require_once('admin-sidebar.php'); ?>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Category</h4>
                <p class="card-description"> Update Category Info </p>
                <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                    <!-- cat_name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="update_name" class="form-control" id="name" value="<?php echo $single_row['name']; ?>"  placeholder="Type Product Name">
                    </div>

                    <!-- sale_price -->
                    <div class="form-group">
                        <label for="sale_price">Sale Price</label>
                        <input type="number" name="update_sale_price" value="<?php echo $single_row['sale_price']; ?>" class="form-control" id="sale_price"  placeholder="Type Sale Price">
                    </div>

                    <!-- regular_price -->
                    <div class="form-group">
                        <label for="regular_price">Regular Price</label>
                        <input type="number" name="update_regular_price" value="<?php echo $single_row['regular_price']; ?>" class="form-control" id="regular_price"  placeholder="Type Regular Price">
                    </div>

                    <!-- quantiy -->
                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <input type="number" name="update_qty" value="<?php echo $single_row['qty']; ?>" class="form-control" id="qty"  placeholder="Type Regular Price">
                    </div>

                    <!-- Short description -->
                    <div class="form-group">
                        <label for="short_desc">Short Description</label>
                        <textarea name="update_short_desc" class="form-control" id="short_desc" cols="30" rows="5"><?php echo $single_row['short_desc']; ?></textarea>
                    </div>

                    <!-- description -->
                    <div class="form-group">
                        <label for="long_desc">Long Description</label>
                        <textarea name="update_long_desc" class="form-control" id="long_desc" cols="30" rows="12"><?php echo $single_row['long_desc']; ?></textarea>
                    </div>


                    <!-- Category -->
                    <div class="form-group">
                        <label for="long_desc">Category</label>
                        <select class="form-control" name="update_category_id">
                            <option>Select Category</option>
                            <?php                          
                            // category
                            $cats_q = mysqli_query($con, "SELECT * FROM categories");
                            $cats = mysqli_fetch_all( $cats_q, MYSQLI_ASSOC );
                                            
                            foreach( $cats as $cat ):?>

                                <option value="<?php echo $cat['cat_id']; ?>" 
                                <?php 
                                if( $cat['cat_id'] == $single_row['category_id']) 
                                echo "Selected";
                                ?>
                                ><?php echo $cat['cat_name']; ?></option>
                            <?php 
                            endforeach; ?>
                        </select>
                    </div>



                    <!-- Thumbnail -->
                    <div class="form-group">
                        <label>File upload</label> <br />
                        <input  type="file" name="update_thumbnail" /><br />
                        <img style="width: 200px; height: 200px" src="../uploads/products/<?php echo $single_row['thumbnail']; ?>" />              
                    </div>

                    <!-- Meta Title -->
                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="update_meta_title" value="<?php echo $single_row['meta_title']; ?>" class="form-control" id="meta_title"  placeholder="Type Product Name">
                    </div>

                    <!-- Meta Keywords -->
                    <div class="form-group">
                        <label for="meta_keywords">Meta Keywords</label>
                        <textarea name="update_meta_keywords" class="form-control" id="meta_keywords" cols="30" rows="3"><?php echo $single_row['meta_keywords']; ?></textarea>
                    </div>

                    <!-- Meta Description -->
                    <div class="form-group">
                        <label for="meta_desc">Meta Description</label>
                        <textarea name="update_meta_desc" class="form-control" id="meta_desc" cols="30" rows="5"><?php echo $single_row['meta_desc']; ?></textarea>
                    </div>


                    <button type="submit" class="btn btn-success mr-2" name="update_product_info">Update Product</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

<?php require_once('admin-footer.php');