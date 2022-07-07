<?php require_once('admin-header.php'); ?>

<div class="container-fluid page-body-wrapper">

<?php require_once('admin-sidebar.php'); ?>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <?php 
                $product_errors = [];
                if( isset( $_POST['product_add']) ){
                    $product_name               = mysqli_real_escape_string($con, $_POST['name']);
                    $product_sale_price         = (float)$_POST['sale_price'];
                    $product_regular_price      = (float)$_POST['regular_price'];
                    $product_quantity           = (int)$_POST['qty'];
                    $product_category_id        = (int)$_POST['category_id'];
                    $product_shot_desc          = mysqli_real_escape_string($con, $_POST['shot_desc']);
                    $product_long_desc          = mysqli_real_escape_string($con, $_POST['long_desc']);
                    $product_meta_title         = mysqli_real_escape_string($con, $_POST['meta_title']);
                    $product_meta_keywords      = mysqli_real_escape_string($con, $_POST['meta_keywords']);
                    $product_meta_description   = mysqli_real_escape_string($con, $_POST['meta_description']);
                    
                    $product_slug = mysqli_real_escape_string($con, strtolower(implode('-', explode(" ", $product_name))));
                    
                    if( empty( $product_name ) ){
                        $product_errors['name'] = "Product Name should not be blank";
                    }

                    if( empty( $product_sale_price ) ){
                        $product_errors['sale_price'] = "Sale Price should not be blank";
                    }

                    if( empty( $product_regular_price ) ){
                        $product_errors['regular_price'] = "Product Name should not be blank";
                    }

                    if( empty( $product_quantity ) ){
                        $product_errors['quantity'] = "Product Quantity should not be blank";
                    }

                    $cat_errors = count( $product_errors );

                    if( $cat_errors <= 0 ){
                        $product_insert_query = "INSERT INTO product(name, slug, sale_price, regular_price, qty, short_desc, long_desc, category_id, meta_title, meta_desc, meta_keywords) VALUES('$product_name', '$product_slug', $product_sale_price, $product_regular_price, $product_quantity, '$product_shot_desc', '$product_long_desc', $product_category_id,  '$product_meta_title', '$product_meta_description', '$product_meta_keywords')";


                        mysqli_query( $con, $product_insert_query );

                    }

                }
                
                // category
                $cats_q = mysqli_query($con, "SELECT * FROM categories");
                $cats = mysqli_fetch_all( $cats_q, MYSQLI_ASSOC );
                ?>

                <h4 class="card-title">Categories</h4>
                <p class="card-description"> You can add category from here </p>
                <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                    <!-- cat_name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?php echo isset($product_name) ? $product_name: ''; ?>"  placeholder="Type Product Name">
                        <?php 
                        if( isset($product_errors['name']) ): ?>
                            <p class="text-danger"><?php echo $product_errors['name']; ?></p>
                        <?php 
                        endif; ?>
                    </div>

                    <!-- sale_price -->
                    <div class="form-group">
                        <label for="sale_price">Sale Price</label>
                        <input type="number" name="sale_price" value="<?php echo isset($product_sale_price) ? $product_sale_price: ''; ?>" class="form-control" id="sale_price"  placeholder="Type Sale Price">
                        <?php 
                        if( isset($product_errors['sale_price']) ): ?>
                            <p class="text-danger"><?php echo $product_errors['sale_price']; ?></p>
                        <?php 
                        endif; ?>
                    </div>

                    <!-- regular_price -->
                    <div class="form-group">
                        <label for="regular_price">Regular Price</label>
                        <input type="number" name="regular_price" value="<?php echo isset($product_regular_price) ? $product_regular_price: ''; ?>" class="form-control" id="regular_price"  placeholder="Type Regular Price">
                        <?php 
                        if( isset($product_errors['regular_price']) ): ?>
                            <p class="text-danger"><?php echo $product_errors['regular_price']; ?></p>
                        <?php 
                        endif; ?>
                    </div>

                    <!-- quantiy -->
                    <div class="form-group">
                        <label for="qty">Quantity</label>
                        <input type="number" name="qty" value="<?php echo isset($product_quantity) ? $product_quantity: ''; ?>" class="form-control" id="qty"  placeholder="Type Regular Price">
                        <?php 
                        if( isset($product_errors['quantity']) ): ?>
                            <p class="text-danger"><?php echo $product_errors['quantity']; ?></p>
                        <?php 
                        endif; ?>
                    </div>

                    <!-- Short description -->
                    <div class="form-group">
                        <label for="shot_desc">Short Description</label>
                        <textarea name="shot_desc" class="form-control" id="shot_desc" cols="30" rows="5"><?php echo isset($product_shot_desc) ? $product_shot_desc: ''; ?></textarea>
                    </div>

                    <!-- description -->
                    <div class="form-group">
                        <label for="long_desc">Long Description</label>
                        <textarea name="long_desc" class="form-control" id="long_desc" cols="30" rows="12"><?php echo isset($product_long_desc) ? $product_long_desc: ''; ?></textarea>
                    </div>


                    <!-- Category -->
                    <div class="form-group">
                        <label for="long_desc">Category</label>
                        <select class="form-control" name="category_id">
                            <option>Select Category</option>
                            <?php 
                            foreach( $cats as $cat ):?>

                                <option value="<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></option>
                            <?php 
                            endforeach; ?>
                        </select>
                        <?php 
                        if( isset($product_errors['category_id']) ): ?>
                            <p class="text-danger"><?php echo $product_errors['category_id']; ?></p>
                        <?php 
                        endif; ?>
                    </div>



                    <!-- Thumbnail -->
                    <div class="form-group">
                        <label>File upload</label> <br />
                        <input  type="file" name="cat_thumbnail" />              
                    </div>

                    <!-- cat_name -->
                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="meta_title" value="<?php echo isset($product_meta_title) ? $product_meta_title: ''; ?>" class="form-control" id="meta_title"  placeholder="Type Product Name">
                    </div>

                    <!-- Meta Keywords -->
                    <div class="form-group">
                        <label for="meta_keywords">Meta Keywords</label>
                        <textarea name="meta_keywords" class="form-control" id="meta_keywords" cols="30" rows="3"><?php echo isset($product_meta_keywords) ? $product_meta_keywords: ''; ?></textarea>
                    </div>

                    <!-- Meta Description -->
                    <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <textarea name="meta_description" class="form-control" id="meta_description" cols="30" rows="5"><?php echo isset($product_meta_description) ? $product_meta_description: ''; ?></textarea>
                    </div>


                    <button type="submit" class="btn btn-success mr-2" name="product_add">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
        </div>
    </div>

</div>

<?php require_once('admin-footer.php');