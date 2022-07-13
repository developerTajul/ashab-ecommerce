<?php 
/**
 * User Creation From admin panel
 */

if( isset( $_POST['reg_user'] ) ){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    /** user thumbnail */
    $file_name = $_FILES['thumbnail']['name'];
    $tmp_name = $_FILES['thumbnail']['tmp_name'];
    move_uploaded_file($tmp_name, '../uploads/'.$file_name);
    
    $insert_query = "INSERT INTO users (name, username, email, thumbnail, password) VALUES('$name', '$username', '$email', '$file_name', '$password')";

    $result = mysqli_query( $con, $insert_query);

    if( $result ){
    $reg_success = "Registration Successful";
            header("location: users.php");
    }else{
    $reg_fail = "Registration Fails. Try Again";
    }
}

/**
 * user activate or deactive
 */
if( isset( $_GET['user_status'] ) ){

  // if( $_GET['user_status'] == 'active'){
  //   $status = 0;
  // }else{
  //   $status = 1;
  // }

  $status = $_GET['user_status'] == 'active' ? 0 : 1;

  $current_status_id = $_GET['id'];
  mysqli_query($con, "UPDATE users SET status='$status' WHERE id='$current_status_id'");
  header("Location: users.php");
}

/**
 * Fetch User Data
 */
if( isset( $_GET['username'] ) ){
  $current_username = $_GET['username'];
  $sql = "SELECT * FROM users WHERE username='$current_username'";
  $user_rows = mysqli_query($con, $sql);
  $user_single_row = mysqli_fetch_assoc( $user_rows  );
}

/**
 * Update User info
 */
if( isset($_POST['update_info']) ){
	$current_username = $_GET['username'];

	$name   = $_POST['update_name'];
	$username  = $_POST['update_username'];
	$email   = $_POST['update_email'];
	$password   = md5($_POST['update_password'] );



	if( $_FILES['update_thumbnail']['name'] != ''){
    /** user thumbnail */
    $file_name = $_FILES['update_thumbnail']['name'];
    $tmp_name = $_FILES['update_thumbnail']['tmp_name'];
    move_uploaded_file($tmp_name, '../uploads/users/'.$file_name);

    unlink('../uploads/users/'.$user_single_row['thumbnail']);

		// with thumbnail image
		$sql_update = "UPDATE users SET name = '$name', username='$username', email = '$email',  thumbnail='$file_name' WHERE username = '$current_username'";
		mysqli_query($con, $sql_update);
	}else{
		// without thumbnail
		$sql_update = "UPDATE users SET name = '$name', username='$username', email = '$email' WHERE username = '$current_username'";
		mysqli_query($con, $sql_update);
	}

	header("Location: users.php");
}


/**
 * Delete User
 */
if( isset( $_GET['user_delete'] ) ){
    $current_deleted_id = $_GET['user_delete'];
    $sql = "DELETE FROM users WHERE username='$current_deleted_id'";
    $result = mysqli_query($con, $sql);

    header("Location: users.php");
}
