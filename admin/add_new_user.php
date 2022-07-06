<?php require_once('admin-header.php'); ?>

<div class="container-fluid page-body-wrapper">

<?php require_once('admin-sidebar.php'); ?>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Add New User</h4>
                <p class="card-description"> You can add new user from here </p>
                <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                    <!-- name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Type User Name">
                    </div>

                    <!-- username -->
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Type  Username">
                    </div>

                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Type Email Address">
                    </div>

                    <!-- password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>

                    <!-- Thumbnail -->
                    <div class="form-group">
                        <label>File upload</label> <br />
                        <input  type="file" name="thumbnail" />              
                    </div>

                    <button type="submit" class="btn btn-success mr-2" name="reg_user">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

<?php require_once('admin-footer.php');