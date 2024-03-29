<?php 
require_once('header.php'); ?>

        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Products</span>
                                </nav>
                            </div>
                        </div>
                    </div>  xfsq
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        <!-- Start Product Grid -->
        <section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <?php 
                    if( isset($_GET['sort']) ){
                        $sort = mysqli_real_escape_string($con, $_GET['sort']);
                        if($sort == "high_price"){
                            $sorted_order = " ORDER BY product.regular_price DESC";
                        }
                        
                        if($sort == "low_price"){
                            $sorted_order = " ORDER BY product.regular_price ASC";
                        }

                        if($sort == "old"){
                            $sorted_order = " ORDER BY product.product_id ASC";
                        }

                        if($sort == "new"){
                            $sorted_order = " ORDER BY product.product_id DESC";
                        }
                    }


                    if( isset( $_GET['cat_id'] ) ):
                    $current_category_id = mysqli_real_escape_string($con, $_GET['cat_id']); 
                    
                    if( isset($sorted_order) ){
                        $sorted_order;
                    }else{
                        $sorted_order = "";
                    }
                    $cat_products = get_products($con, $sorted_order, '8', '', $current_category_id, '');
                    $product_number = count($cat_products);
                        if( $product_number > 0 ):


                        ?>
                            <div class="col-lg-12 order-lg-2 order-1">
                                <div class="htc__product__rightidebar">
                                    <div class="htc__grid__top">
                                        <div class="htc__select__option">
                                            <select class="ht__select" name="product_sorting" onchange="sort_product_drop(<?php echo $current_category_id; ?>)" id="sort_product_id">
                                                <option value="">Defaut Sorting</option>
                                                <option value="high_price">High to Low Price</option>
                                                <option value="low_price">Low to High Price</option>
                                                <option value="old">ASC Product</option>
                                                <option value="new">DESC Product</option>
                                            </select>
                                            <select class="ht__select">
                                                <option>Show by</option>
                                                <option>Sort by popularity</option>
                                                <option>Sort by average rating</option>
                                                <option>Sort by newness</option>
                                            </select>
                                        </div>
                                        <div class="ht__pro__qun">
                                            <span>Showing 1-12 of 48 products</span>
                                        </div>
                                        <!-- Start List And Grid View -->
                                        <ul class="nav view__mode" role="tablist">
                                            <li role="presentation" class="grid-view"><a class="active" href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                            <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                                        </ul>
                                        <!-- End List And Grid View -->
                                    </div>
                                    <!-- Start Product View -->
                                    <div class="shop__grid__view__wrap">
                                        <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade show in active row">
                                        <?php
                                        if( is_array( $cat_products ) ):
                                            foreach( $cat_products as $product ): ?>
                                                <!-- Start Single Product -->
                                                <div class="col-lg-3 col-md-4">
                                                    <div class="category">
                                                        <div class="ht__cat__thumb">
                                                            <a href="product.php?product_id=<?php echo $product['product_id']; ?>">
                                                                <img src="uploads/products/<?php echo $product['thumbnail']; ?>" alt="<?php echo $product['name']; ?>">
                                                            </a>
                                                        </div>
                                                        <div class="fr__hover__info">
                                                            <ul class="product__action">
                                                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                                <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="fr__product__inner">
                                                            <h4><a href="product.php?product_id=<?php echo $product['product_id']; ?>"><?php echo $product['name']; ?></a></h4>
                                                            <ul class="fr__pro__prize">
                                                                <li class="old__prize"><?php echo $product['sale_price']; ?></li>
                                                                <li>$<?php echo $product['regular_price']; ?></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Product -->
                                            <?php 
                                            endforeach; 
                                        endif;
                                        ?>

                                        </div>
                                        <div role="tabpanel" id="list-view" class="single-grid-view tab-pane fade clearfix row">
                                        <?php
                                        if( is_array( $cat_products ) ):
                                            foreach( $cat_products as $product ): ?>
                                                <div class="col-lg-12">
                                                    <div class="ht__list__wrap">
                                                        <!-- Start List Product -->
                                                        <div class="ht__list__product">
                                                            <div class="ht__list__thumb">
                                                                <a href="product-details.html"><img src="images/product-2/pro-1/1.jpg" alt="product images"></a>
                                                            </div>
                                                            <div class="htc__list__details">
                                                                <h2><a href="product-details.html"><?php echo $product['name']; ?></a></h2>
                                                                <ul  class="pro__prize">
                                                                    <li class="old__prize">$<?php echo $product['sale_price']; ?></li>
                                                                    <li>$<?php echo $product['regular_price']; ?></li>
                                                                </ul>
                                                                <ul class="rating">
                                                                    <li><i class="icon-star icons"></i></li>
                                                                    <li><i class="icon-star icons"></i></li>
                                                                    <li><i class="icon-star icons"></i></li>
                                                                    <li class="old"><i class="icon-star icons"></i></li>
                                                                    <li class="old"><i class="icon-star icons"></i></li>
                                                                </ul>
                                                                <p><?php echo $product['short_desc']; ?></p>
                                                                <div class="fr__list__btn">
                                                                    <a class="fr__btn" href="cart.html">Add To Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End List Product -->
                                                    </div>
                                                </div>
                                            <?php 
                                            endforeach; 
                                        endif;
                                        ?>
                                        </div>
                                    </div>
                                    <!-- End Product View -->
                                </div>
                                <!-- Start Pagenation -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="htc__pagenation">
                                        <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li> 
                                        <li><a href="#">1</a></li> 
                                        <li class="active"><a href="#">3</a></li>   
                                        <li><a href="#">19</a></li> 
                                        <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li> 
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Pagenation -->
                            </div>
                        <?php 
                        else: ?>
                            <div class="col-lg-12 order-lg-2 order-1">
                                <h1>No Product Found</h1>
                            </div>
                        <?php
                        endif;
                    endif; ?>
                </div>
            </div>
        </section>
        <!-- End Product Grid -->
        <!-- Start Brand Area -->
        <div class="htc__brand__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ht__brand__inner">
                            <ul class="brand__list owl-carousel clearfix">
                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/3.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/4.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area -->
<?php
require_once('footer.php');
