<?php 
require_once('inc/config.php');

$errors = [];

if( isset( $_POST['regist_post'] ) ){
    $name           = $_POST['name'];
    $username       = $_POST['username'];
    $email          = $_POST['email'];
    $password       = md5($_POST['password']);
    $c_password     = md5($_POST['c_password']);


    if( empty( $name )){
    	$errors['name'] = "Name filed should not be blank";
    }

    if( empty( $username ) ){
		$errors['username'] = "Username must not be blank";
    }

    if( empty( $email ) ){
		$errors['email'] = "Email must not be blank";
    }

    if( empty( $password ) ){
		$errors['password'] = "Password must not be blank";
    }

    if( empty( $c_password ) ){
		$errors['c_password'] = "Confirm Password must not be blank";
    }


	$error_number = count( $errors );

	if($error_number <= 0 ){
		
		$email_check = mysqli_query( $con, "SELECT * FROM users WHERE email='$email'");
		$user_check = mysqli_query( $con, "SELECT * FROM users WHERE username='$username'");

		// email address check
		if( mysqli_num_rows( $email_check ) <= 0   ){

			// username check
			if(  mysqli_num_rows( $user_check ) <= 0 ){

				if( $password === $c_password ){
					// upload image
					$file_name = $_FILES['thumbnail']['name'];
					$temp_file_name = $_FILES['thumbnail']['tmp_name'];
					move_uploaded_file($temp_file_name, '../uploads/'.$file_name);    
					
					$insert_query = "INSERT INTO users (name, username, email, thumbnail, password) VALUES('$name', '$username', '$email', '$file_name', '$password')";
					
					$result = mysqli_query( $con, $insert_query);

					if( $result ){
						$reg_success = "Registration Successful";
					}else{
						$reg_fail = "Registration Fails. Try Again";
					}

				}else{
					$password_error = "Password does not match";	
				}

			}else{
				$username_taken = "Username has been taken";
			}
		}else{
			$email_taken = "Email Addres has been taken";
		}

	}

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <h2 class="text-center mb-4">Register Now</h2>
              <?php 
              if( isset($email_taken) ): ?>
              <h4><?php echo $email_taken; ?></h4>
              <?php 
              endif; ?>
              <?php 
              if( isset($username_taken) ): ?>
              <h4><?php echo $username_taken; ?></h4>
              <?php 
              endif; ?>

              <?php 
              if( isset($reg_success) ): ?>
              <h4><?php echo $reg_success; ?></h4>
              <?php 
              endif; ?>

              <?php 
              if( isset($password_error) ): ?>
              <h4><?php echo $password_error; ?></h4>
              <?php 
              endif; ?>


              <div class="auto-form-wrapper">
                <form action="#" method="POST" enctype="multipart/form-data">

                  <!-- Full Name -->  
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="name" class="form-control" placeholder="Full Name">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
					<?php 
					if( isset( $errors['name'] ) ): ?>
						<h6 class="text-danger"><?php echo $errors['name']; ?></h6>
					<?php 
					endif; ?>
                  </div>

                  <!-- Username -->
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="username" class="form-control" placeholder="Username">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
					<?php 
					if( isset( $errors['username'] ) ): ?>
						<h6 class="text-danger"><?php echo $errors['username']; ?></h6>
					<?php 
					endif; ?>
                  </div>

                  <!-- Email -->
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="email" class="form-control" placeholder="Email Address">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
					<?php 
					if( isset( $errors['email'] ) ): ?>
						<h6 class="text-danger"><?php echo $errors['email']; ?></h6>
					<?php 
					endif; ?>
                  </div>

                  <!-- Thumbnail -->
                  <div class="form-group">
                    <div class="input-group">
                      <input type="file" class="form-control" name="thumbnail">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                <!-- password -->
                  <div class="form-group">
                    <div class="input-group">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
					<?php 
					if( isset( $errors['password'] ) ): ?>
						<h6 class="text-danger"><?php echo $errors['password']; ?></h6>
					<?php 
					endif; ?>
                  </div>

                <!-- password -->
                  <div class="form-group">
                    <div class="input-group">
                      <input type="password" name="c_password" class="form-control" placeholder="Confirm Password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
					<?php 
					if( isset( $errors['c_password'] ) ): ?>
						<h6 class="text-danger"><?php echo $errors['c_password']; ?></h6>
					<?php 
					endif; ?>
                  </div>

                  <div class="form-group d-flex justify-content-center">
                    <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked> I agree to the terms </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit"  name="regist_post" class="btn btn-primary submit-btn btn-block regist_post">Register</button>
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Already have and account ?</span>
                    <a href="login.php" class="text-black text-small">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>