<?php 
session_start();
require_once('admin/inc/config.php');
require_once('functions.php'); 
require_once('inc/template-helper.php'); 
require_once('add_to_cart.php');

$obj = new Add_To_Cart();
$totalProducts = $obj->totalProduct();

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Asbab – Furniture Ecommerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-3 col-5">
                            <div class="logo">
                                <a href="index.php"><img src="images/logo/4.png" alt="logo images"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                            <nav class="main__menu__nav">
                                <ul class="main__menu">
                                    <li class="drop"><a href="index.php">Home</a></li>
                                    <?php
                                    if( is_array( $cats ) ):
                                        foreach($cats as $cat): ?>
                                            <li class="drop"><a href="categories.php?cat_id=<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></a></li>
                                        <?php 
                                        endforeach;
                                    endif; ?>
                                    <li><a href="contact.php">contact</a></li>
                                    <?php 
                                    if( isset( $_SESSION['name'] ) ): ?>
                                    <li><a href="logout.php">Logout</a></li>
                                    <?php 
                                    else: ?>
                                    <li><a href="login.php">Login</a></li>
                                    <?php 
                                    endif; ?>
                                </ul>
                            </nav>

                            <div class="mobile-menu d-block d-lg-none">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <?php
                                        if( is_array( $cats ) ):
                                            foreach($cats as $cat): ?>
                                                <li class="drop"><a href="categories.php?id=<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></a></li>
                                            <?php 
                                            endforeach;
                                        endif; ?>
                                        <li><a href="contact.php">contact</a></li>
                                        <li><a href="login.php">Login</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-8 col-6">
                            <div class="header__right">
                                <div class="header__search search search__open">
                                    <a href="#"><i class="icon-magnifier icons"></i></a>
                                </div>
                                <div class="header__account">
                                    <a href="#"><i class="icon-user icons"></i></a>
                                </div>
                                <div class="htc__shopping__cart">
                                    <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                    <a href="cart.php"><span class="htc__qua"><?php echo $totalProducts; ?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area d-flex"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="search__inner">
                                <form action="search.php" method="get">
                                    <input placeholder="Search here... " type="text" name="s">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                    <?php 
                        $cart_total = 0;
                        if( isset($_SESSION['cart']) ):
                            foreach( $_SESSION['cart'] as $key => $value ): 
                                $productArray = get_products($con, '', '', $key);

                                $product_id = $productArray[0]['product_id'];
                                $name = $productArray[0]['name'];
                                $thumbnail = $productArray[0]['thumbnail'];
                                $regular_price = $productArray[0]['regular_price'];
                                $sale_price = $productArray[0]['sale_price'];
                                $qty = (int)$value['qty'];
                                $cart_total = $cart_total + ($qty*$sale_price);


                                
                            ?>
                            <div class="shp__single__product">
                                <div class="shp__pro__thumb">
                                    <a href="#">
                                    <img src="uploads/products/<?php echo $thumbnail; ?>" alt="<?php echo $name; ?>">
                                    </a>
                                </div>
                                <div class="shp__pro__details">
                                    <h2><a href="product-details.html"><?php echo $name; ?></a></h2>
                                    <span class="quantity">QTY: <?php echo $qty; ?></span>
                                    <span class="shp__price">$<?php echo $qty*$sale_price; ?></span>
                                </div>
                                <div class="remove__btn">
                                    <a href="javascript:void()" onclick="manage_cart('<?php echo $product_id; ?>', 'remove')" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                                </div>
                            </div>
                            <?php 
                            endforeach; 
                        endif;
                        ?>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$<?php echo $cart_total; ?></li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.php">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.php">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->