<?php 
$users_query = mysqli_query($con, "SELECT * FROM categories WHERE cat_status='1' ORDER BY cat_id DESC");	
$cats = mysqli_fetch_all($users_query, MYSQLI_ASSOC);


function get_products($con, $orderby='asc', $limit='', $cat_id='' ){
    $sql = "SELECT * FROM product WHERE status = '1'";



    if( $cat_id != '' ){
        $sql .= " && category_id='$cat_id'";
    }

    if( $orderby != '' ){
        $sql .= " order by product_id $orderby";
    }

    if( $limit != "" ){
        $sql .= " limit $limit";
    }

    $product_query = mysqli_query($con, $sql);
    $products = mysqli_fetch_all($product_query, MYSQLI_ASSOC);

    return $products;

}