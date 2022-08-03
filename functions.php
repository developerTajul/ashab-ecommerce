<?php 
$users_query = mysqli_query($con, "SELECT * FROM categories WHERE cat_status='1' ORDER BY cat_id DESC");	
$cats = mysqli_fetch_all($users_query, MYSQLI_ASSOC);

/**
 * get product
 *
 * @param [type] $con
 * @param [type] $orderby
 * @param string $limit
 * @param string $product_id
 * @param string $cat_id
 * @param string $search_str
 * @return void
 */
function get_products($con, $orderby, $limit='', $product_id='', $cat_id='', $search_str = '' ){
    $sql = "SELECT product.*, categories.* FROM product, categories WHERE product.status = '1'";

    if( $product_id != '' ){
        $sql .= " && product.product_id='$product_id'";
    }

    if( $cat_id != '' ){
        $sql .= " && product.category_id='$cat_id'";
    }

    $sql .= " && product.category_id = categories.cat_id";

    if( $search_str != '' ){
        $sql .= " && product.name LIKE '%$search_str%' OR product.long_desc LIKE '%$search_str%'";
    }

    if( $orderby != '' ){
        $sql .= $orderby;
    }else{
        $sql .= " ORDER BY product.product_id DESC";
    }

    if( $limit != "" ){
        $sql .= " LIMIT $limit";
    }

    // echo $sql;
    $product_query = mysqli_query($con, $sql);
    $products = mysqli_fetch_all($product_query, MYSQLI_ASSOC);


    return $products;

}






/**
 * Search Product
 */

function search_products($con, $str = ''){
	/**
	* 
	$search_results = mysqli_query($con, "SELECT * FROM product, categories WHERE product.status =1 AND product.category_id = categories.cat_id AND ( product.name LIKE '%$str%' || product.short_desc LIKE '%$str%' || product.long_desc LIKE '%$str%')"); 
	*/
	$search_query = "SELECT * FROM product 
	INNER JOIN categories ON product.category_id = categories.cat_id 
	WHERE product.status = 1 
	AND (product.name LIKE '%$str%' OR product.short_desc LIKE '%$str%' OR product.long_desc LIKE '%$str%')";

	$search_results = mysqli_query($con, $search_query);

	$result = mysqli_fetch_all($search_results, MYSQLI_ASSOC);

	return $result;
}

