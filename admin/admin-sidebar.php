<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
    <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
        <div class="profile-image">
            <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
            <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
            <p class="profile-name"><?php echo $name; ?></p>
            <p class="designation">Premium user</p>
        </div>
        </a>
    </li>
    <li class="nav-item nav-category">Main Menu</li>
    <li class="nav-item">
        <a class="nav-link" href="index.php">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Dashboard</span>
        </a>
    </li>
    <!-- User -->
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Users</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="users">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="users.php">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="add_new_user.php">Add User</a></li>
            </ul>
        </div>
    </li>

    <!-- product -->
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#products" aria-expanded="false" aria-controls="products">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Products</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="products">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_new_product.php">Add Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="edit_product.php">Edit Product</a>
            </li>
        </ul>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="categories">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Categories</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="categories">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="categories.php">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_category.php">Add Category</a>
            </li>
        </ul>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="pages/forms/basic_elements.html">
        <i class="menu-icon typcn typcn-shopping-bag"></i>
        <span class="menu-title">Form elements</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
        <i class="menu-icon typcn typcn-th-large-outline"></i>
        <span class="menu-title">Charts</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
        <i class="menu-icon typcn typcn-bell"></i>
        <span class="menu-title">Tables</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pages/icons/font-awesome.html">
        <i class="menu-icon typcn typcn-user-outline"></i>
        <span class="menu-title">Icons</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon typcn typcn-document-add"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
            <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pages/samples/login.html"> Login </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pages/samples/register.html"> Register </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
            </li>
        </ul>
        </div>
    </li>
    </ul>
</nav>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">