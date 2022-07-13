<?php 
/**
 * Add Product
 */
$product_errors = [];
if( isset( $_POST['product_add'] ) ){

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

    /**
     * Thumbnail
     */
    $product_file_name = $_FILES['thumbnail']['name'];
    $product_tmp_name = $_FILES['thumbnail']['tmp_name'];
    move_uploaded_file($product_tmp_name, '../uploads/products/'.$product_file_name);

    if( $cat_errors <= 0 ){
        if( $product_file_name != "" ){
            $product_insert_query = "INSERT INTO product(name, slug, sale_price, regular_price, qty, short_desc, long_desc, category_id, thumbnail, meta_title, meta_desc, meta_keywords) VALUES('$product_name', '$product_slug', $product_sale_price, $product_regular_price, $product_quantity, '$product_shot_desc', '$product_long_desc', $product_category_id,  '$product_file_name', '$product_meta_title', '$product_meta_description', '$product_meta_keywords')";
        }else{

            $product_insert_query = "INSERT INTO product(name, slug, sale_price, regular_price, qty, short_desc, long_desc, category_id, meta_title, meta_desc, meta_keywords) VALUES('$product_name', '$product_slug', $product_sale_price, $product_regular_price, $product_quantity, '$product_shot_desc', '$product_long_desc', $product_category_id,  '$product_meta_title', '$product_meta_description', '$product_meta_keywords')";
        }
        mysqli_query( $con, $product_insert_query );
        header("location: products.php");
    }

}


/**
 * Delete Product
 */
if( isset( $_GET['product_delete'] ) ){
    $current_delete_product_id = $_GET['product_delete'];

    $delete_product_sql = "DELETE FROM product WHERE product_id='$current_delete_product_id'";

    mysqli_query($con, $delete_product_sql);
    header("location: products.php");
    
}


/**
 * Fetch Single Data
 */
if( isset( $_GET['product_id'] ) ){
    $current_product_id = $_GET['product_id'];
    $sql = "SELECT * FROM product WHERE product_id='$current_product_id'";
    $rows = mysqli_query($con, $sql);
    $single_row = mysqli_fetch_assoc( $rows  );
}

/**
 * Update Product Info
 */
if( isset( $_POST['update_product_info']) ){

    $current_product_id = $_GET['product_id'];
    
    $update_product_name               = mysqli_real_escape_string($con, $_POST['update_name']);
    $update_product_sale_price         = (float)$_POST['update_sale_price'];
    $update_product_regular_price      = (float)$_POST['update_regular_price'];
    $update_product_quantity           = (int)$_POST['update_qty'];
    $update_product_category_id        = (int)$_POST['update_category_id'];
    $update_product_shot_desc          = mysqli_real_escape_string($con, $_POST['update_short_desc']);
    $update_product_long_desc          = mysqli_real_escape_string($con, $_POST['update_long_desc']);
    $update_product_meta_title         = mysqli_real_escape_string($con, $_POST['update_meta_title']);
    $update_product_meta_keywords      = mysqli_real_escape_string($con, $_POST['update_meta_keywords']);
    $update_product_meta_description   = mysqli_real_escape_string($con, $_POST['update_meta_desc']);

    /**
     * Files
     */


    if( $_FILES['update_thumbnail']['name'] != ""){

        $update_file_name = $_FILES['update_thumbnail']['name'];
        $update_tmp_file_name = $_FILES['update_thumbnail']['tmp_name'];
        move_uploaded_file($update_tmp_file_name, '../uploads/products/'.$update_file_name);

        // delete previous image
        unlink('../uploads/products/'.$single_row['thumbnail']);
        
        $product_update_query = "UPDATE product SET name = '$update_product_name', sale_price='$update_product_sale_price', regular_price = '$update_product_regular_price', qty='$update_product_quantity', short_desc='$update_product_shot_desc', long_desc='$update_product_long_desc', thumbnail='$update_file_name', category_id=$update_product_category_id, meta_title='$update_product_meta_title', meta_desc='$update_product_meta_description', meta_keywords='$update_product_meta_keywords'  WHERE product_id = '$current_product_id'";


    }else{
        $product_update_query = "UPDATE product SET name = '$update_product_name', sale_price='$update_product_sale_price', regular_price = '$update_product_regular_price', qty='$update_product_quantity', short_desc='$update_product_shot_desc', long_desc='$update_product_long_desc', category_id=$update_product_category_id, meta_title='$update_product_meta_title', meta_desc='$update_product_meta_description', meta_keywords='$update_product_meta_keywords'  WHERE product_id = '$current_product_id'";  
    }







   
    mysqli_query( $con, $product_update_query );

    header("location: products.php");

}