<?php require_once('admin-header.php'); ?>

<div class="container-fluid page-body-wrapper">

<?php require_once('admin-sidebar.php'); ?>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <?php 

                ?>
                <h4 class="card-title">Edit User</h4>
                <p class="card-description"> Update Your User Info </p>
                <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                    <!-- name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="update_name" class="form-control" id="name" value="<?php echo $user_single_row['name']; ?>" placeholder="Update Name">
                    </div>

                    <!-- username -->
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text"  name="update_username" value="<?php echo $user_single_row['username']; ?>"  class="form-control" id="username" placeholder="Update Username">
                    </div>

                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="update_email" value="<?php echo $user_single_row['email']; ?>"  class="form-control" id="email" placeholder="Update Email">
                    </div>

     

                    <!-- Thumbnail -->
                    <div class="form-group">
                        <label>File upload</label> <br />
                        <input  type="file" name="update_thumbnail" /><br /><br />
                        <img style="width:250px; height: 250px;" src="../uploads/users/<?php echo $user_single_row['thumbnail']; ?>"  alt="">
                        
                    </div>

                    <button type="submit" class="btn btn-success mr-2" name="update_info">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

<?php require_once('admin-footer.php');