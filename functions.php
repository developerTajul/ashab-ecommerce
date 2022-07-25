<?php 
$users_query = mysqli_query($con, "SELECT * FROM categories WHERE cat_status='1' ORDER BY cat_id DESC");	
$cats = mysqli_fetch_all($users_query, MYSQLI_ASSOC);


function get_products($con, $orderby='asc', $limit='', $product_id='', $cat_id='' ){
    $sql = "SELECT product.*, categories.* FROM product, categories WHERE product.status = '1'";

    if( $product_id != '' ){
        $sql .= " && product.product_id='$product_id'";
    }

    if( $cat_id != '' ){
        $sql .= " && product.category_id='$cat_id'";
    }

    $sql .= " && product.category_id = categories.cat_id";

    if( $orderby != '' ){
        $sql .= " order by product.product_id $orderby";
    }

    if( $limit != "" ){
        $sql .= " limit $limit";
    }

    $product_query = mysqli_query($con, $sql);
    $products = mysqli_fetch_all($product_query, MYSQLI_ASSOC);


    return $products;

}



