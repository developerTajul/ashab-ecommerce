<?php 
require_once('admin/inc/config.php');
require_once('functions.php'); 
require_once('inc/template-helper.php'); 
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
                                <a href="index.html"><img src="images/logo/4.png" alt="logo images"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                            <nav class="main__menu__nav">
                                <ul class="main__menu">
                                    <li class="drop"><a href="index.html">Home</a></li>
                                    <?php
                                    if( is_array( $cats ) ):
                                        foreach($cats as $cat): ?>
                                            <li class="drop"><a href="categories.php?cat_id=<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></a></li>
                                        <?php 
                                        endforeach;
                                    endif; ?>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>

                            <div class="mobile-menu d-block d-lg-none">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <?php
                                        if( is_array( $cats ) ):
                                            foreach($cats as $cat): ?>
                                                <li class="drop"><a href="categories.php?id=<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></a></li>
                                            <?php 
                                            endforeach;
                                        endif; ?>
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="contact.html">contact</a></li>
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
                                    <a href="#"><span class="htc__qua">2</span></a>
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