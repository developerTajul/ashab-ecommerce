<?php 
// Add Category
$cat_errors = [];
if( isset( $_POST['add_categry'] )){

    $name = $_POST['cat_name'];
    $desc = $_POST['cat_desc'];
    $slug_array = preg_split("/ | ,|,/", $name);
    $slug = strtolower(implode("-", $slug_array));


    /**
     * Thumbnail
     */
    $cat_file_name = $_FILES['cat_thumbnail']['name'];
    $cat_tmp_name = $_FILES['cat_thumbnail']['tmp_name'];
    move_uploaded_file($cat_tmp_name, '../uploads/'.$cat_file_name);

    if( empty( $name ) ){
        $cat_errors['name'] = "Name Filed Must not be blank";
    }
   
    if(count($cat_errors) <= 0){

        if( $cat_file_name != "" ){
            $result = mysqli_query($con, "INSERT INTO categories(cat_name, cat_slug, cat_desc, cat_thumbnail) VALUES('$name', '$slug', '$desc', '$cat_file_name')");
        }else{
            $result = mysqli_query($con, "INSERT INTO categories(cat_name, cat_slug, cat_desc) VALUES('$name', '$slug', '$desc')");
        }

        
        if( $result ){
            $cat_inserted = "Category has been inserted successfully";     
        }else{
            $cat_inserted_fail = "Category inserted fails";
        }

		header("location: categories.php");
    }

}

// update category info
if( isset( $_POST['update_category_info'] ) ){

	$current_cat_slug = $_GET['cat_slug'];

	$cat_name = $_POST['update_cat_name'];
	$cat_slug = $_POST['update_cat_slug'];
	$cat_desc = $_POST['update_cat_desc'];

	// File Upload
	$cat_file_name = $_FILES['update_cat_thumbnail']['name'];
	$file_tmp_name = $_FILES['update_cat_thumbnail']['tmp_name'];
	move_uploaded_file($file_tmp_name, '../uploads/'.$cat_file_name);

  if( $cat_file_name != "" ){
    $sql_update = "UPDATE categories SET cat_name = '$cat_name', cat_desc='$cat_desc', cat_thumbnail='$cat_file_name' WHERE cat_slug = '$current_cat_slug'";
  }else{
    $sql_update = "UPDATE categories SET cat_name = '$cat_name', cat_desc='$cat_desc' WHERE cat_slug = '$current_cat_slug'";
  }

	mysqli_query($con, $sql_update);

	header("location: categories.php");
}

if( isset( $_GET['cat_delete'] ) ){
  $current_deleted_id = $_GET['cat_delete'];
  $sql = "DELETE FROM categories WHERE cat_slug='$current_deleted_id'";
  $result = mysqli_query($con, $sql);

  header("Location: categories.php");
}

if( isset( $_GET['cat_status'] ) ){

  // if( $_GET['user_status'] == 'active'){
  //   $status = 0;
  // }else{
  //   $status = 1;
  // }

  $status = $_GET['cat_status'] == 'active' ? 0 : 1;

  $cat_status_id = $_GET['id'];
  mysqli_query($con, "UPDATE categories SET cat_status='$status' WHERE cat_id='$cat_status_id'");
  header("Location: categories.php");
}