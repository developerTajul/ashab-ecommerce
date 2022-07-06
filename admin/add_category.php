<?php require_once('admin-header.php'); ?>

<div class="container-fluid page-body-wrapper">

<?php require_once('admin-sidebar.php'); ?>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Categories</h4>
                <p class="card-description"> You can add category from here </p>
                <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                    <!-- name -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Type User Name">
                    </div>

                    <!-- name -->
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea name="desc" class="form-control" id="desc" cols="30" rows="10"></textarea>
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