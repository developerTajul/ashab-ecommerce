<?php require_once('admin-header.php'); ?>

<div class="container-fluid page-body-wrapper">

<?php require_once('admin-sidebar.php'); ?>
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <?php 


                ?>

                <h4 class="card-title">Categories</h4>
                <p class="card-description"> You can add category from here </p>
                <?php 
                if( isset($cat_inserted) ): ?>
                <p><?php echo $cat_inserted; ?></p>
                <?php
                endif; ?>
                <?php 
                if( isset( $cat_errors['name'] ) ): ?>
                <p><?php echo $cat_errors['name']; ?></p>
                <?php
                endif; ?>



                <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                    <!-- cat_name -->
                    <div class="form-group">
                        <label for="cat_name">Name</label>
                        <input type="text" name="cat_name" class="form-control" id="cat_name"  placeholder="Type User Name">
                    </div>

                    <!-- description -->
                    <div class="form-group">
                        <label for="cat_desc">Description</label>
                        <textarea name="cat_desc" class="form-control" id="cat_desc" cols="30" rows="10"></textarea>
                    </div>

                    <!-- Thumbnail -->
                    <div class="form-group">
                        <label>File upload</label> <br />
                        <input  type="file" name="cat_thumbnail" />              
                    </div>

                    <button type="submit" class="btn btn-success mr-2" name="add_categry">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

<?php require_once('admin-footer.php');