<?php 
require_once('header.php'); 
?>

        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-xl-6 col-md-7">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>collection 2019</h2>
                                        <h1>NICE CHAIR</h1>
                                        <div class="cr__btn">
                                            <a href="product-grid.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/slider/fornt-img/1.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-xl-6 col-md-7">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>collection 2019</h2>
                                        <h1>NICE CHAIR</h1>
                                        <div class="cr__btn">
                                            <a href="product-grid.html">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/slider/fornt-img/2.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- Start Slider Area -->
        <!-- Start Category Area -->
        <section class="htc__category__area ptb--100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">New Arrivals</h2>
                            <p>But I must explain to you how all this mistaken idea</p>
                        </div>
                    </div>
                </div>
                

                <div class="row product-list_area mt--30">
                    <!-- Start Single Category -->
                    <?php 
                    $latest_products = get_products($con, '', '8');
                    foreach( $latest_products as $product ): ?>
                    <div class="col-xl-3 col-md-4">
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
                                    <li class="old__prize">$<?php echo $product['regular_price']; ?></li>
                                    <li>$<?php echo $product['sale_price']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php 
                    endforeach; ?>
                    <!-- End Single Category -->

                </div>
            </div>
        </section>
        <!-- End Category Area -->
        <!-- Start Prize Good Area -->
        <section class="htc__good__sale bg__cat--3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="fr__prize__inner">
                            <h2>Contrary to popular belief is simply rand.</h2>
                            <h3>Professor at Hamp deny dney College.</h3>
                            <a class="fr__btn" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="prize__inner">
                            <div class="prize__thumb">
                                <img src="images/banner/big-img/1.png" alt="banner images">
                            </div>
                            <div class="banner__info">
                                <div class="pointer__tooltip pointer--3 align-left">
                                    <div class="tooltip__box">
                                        <h4>Tooltip Left</h4>
                                        <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                                    </div>
                                </div>
                                <div class="pointer__tooltip pointer--4 align-top">
                                    <div class="tooltip__box">
                                        <h4>Tooltip Top</h4>
                                        <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                                    </div>
                                </div>
                                <div class="pointer__tooltip pointer--5 align-bottom">
                                    <div class="tooltip__box">
                                        <h4>Tooltip Bottom</h4>
                                        <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                                    </div>
                                </div>
                                <div class="pointer__tooltip pointer--6 align-top">
                                    <div class="tooltip__box">
                                        <h4>Tooltip Bottom</h4>
                                        <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                                    </div>
                                </div>
                                <div class="pointer__tooltip pointer--7 align-top">
                                    <div class="tooltip__box">
                                        <h4>Tooltip Bottom</h4>
                                        <p>Lorem ipsum pisaci volupt atem accusa saes ntisdumtiu loperm asaerks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Prize Good Area -->
        <!-- Start Product Area -->
        <section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Best Seller</h2>
                            <p>But I must explain to you how all this mistaken idea</p>
                        </div>
                    </div>
                </div>
                <div class="product__wrap row">
                    <!-- Start Single Category -->
                    <div class="col-xl-3 col-md-4">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product-details.html">
                                    <img src="images/product/9.jpg" alt="product images">
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
                                <h4><a href="product-details.html">Special Wood Basket</a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize">$30.3</li>
                                    <li>$25.9</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
                    <!-- Start Single Category -->
                    <div class="col-xl-3 col-md-4">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product-details.html">
                                    <img src="images/product/10.jpg" alt="product images">
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
                                <h4><a href="product-details.html">voluptatem accusantium</a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize">$30.3</li>
                                    <li>$25.9</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
                    <!-- Start Single Category -->
                    <div class="col-xl-3 col-md-4">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product-details.html">
                                    <img src="images/product/11.jpg" alt="product images">
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
                                <h4><a href="product-details.html">Product Dummy Name</a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize">$30.3</li>
                                    <li>$25.9</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
                    <!-- Start Single Category -->
                    <div class="col-xl-3 col-md-4">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product-details.html">
                                    <img src="images/product/12.jpg" alt="product images">
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
                                <h4><a href="product-details.html">Product Title Here </a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize">$30.3</li>
                                    <li>$25.9</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
            </div>
        </section>
        <!-- End Product Area -->
        <!-- Start Testimonial Area -->
        <section class="htc__testimonial__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="ht__testimonial__activation clearfix">
                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 single__tes">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="images/test/client/1.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4><a href="#">Mr.Mike Band</a></h4>
                                    <p>I’m up to something. Stay focused. The weather is amazing, walk with me through
                                        the pathway of more success. </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 single__tes">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="images/test/client/2.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4><a href="#">Ms.Lucy Barton</a></h4>
                                    <p>I’m up to something. Stay focused. The weather is amazing, walk with me through
                                        the pathway of more success. </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 single__tes">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="images/test/client/1.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4><a href="#">Ms.Lucy Barton</a></h4>
                                    <p>I’m up to something. Stay focused. The weather is amazing, walk with me through
                                        the pathway of more success. </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 single__tes">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="images/test/client/2.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4><a href="#">Ms.Lucy Barton</a></h4>
                                    <p>I’m up to something. Stay focused. The weather is amazing, walk with me through
                                        the pathway of more success. </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->
        <!-- Start Top Rated Area -->
        <section class="top__rated__area bg__white pt--100 pb--110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Top Rated</h2>
                            <p>But I must explain to you</p>
                        </div>
                    </div>
                </div>
                <div class="row mt--20">
                    <!-- Start Single Product -->
                    <div class="col-xl-4 col-md-6">
                        <div class="htc__best__product">
                            <div class="htc__best__pro__thumb">
                                <a href="product-details.html">
                                    <img src="images/product-2/sm-img-2/1.jpg" alt="small product">
                                </a>
                            </div>
                            <div class="htc__best__product__details">
                                <h2><a href="product-details.html">dummy Product title</a></h2>
                                <ul class="rating">
                                    <li><i class="icon-star icons"></i></li>
                                    <li><i class="icon-star icons"></i></li>
                                    <li><i class="icon-star icons"></i></li>
                                    <li class="old"><i class="icon-star icons"></i></li>
                                    <li class="old"><i class="icon-star icons"></i></li>
                                </ul>
                                <ul class="top__pro__prize">
                                    <li class="old__prize">$82.5</li>
                                    <li>$75.2</li>
                                </ul>
                                <div class="best__product__action">
                                    <ul class="product__action--dft">
                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>
                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>
                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-xl-4 col-md-6">
                        <div class="htc__best__product">
                            <div class="htc__best__pro__thumb">
                                <a href="product-details.html">
                                    <img src="images/product-2/sm-img-2/2.jpg" alt="small product">
                                </a>
                            </div>
                            <div class="htc__best__product__details">
                                <h2><a href="product-details.html">dummy Product title</a></h2>
                                <ul class="rating">
                                    <li><i class="icon-star icons"></i></li>
                                    <li><i class="icon-star icons"></i></li>
                                    <li><i class="icon-star icons"></i></li>
                                    <li class="old"><i class="icon-star icons"></i></li>
                                    <li class="old"><i class="icon-star icons"></i></li>
                                </ul>
                                <ul class="top__pro__prize">
                                    <li class="old__prize">$82.5</li>
                                    <li>$75.2</li>
                                </ul>
                                <div class="best__product__action">
                                    <ul class="product__action--dft">
                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>
                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>
                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    <!-- Start Single Product -->
                    <div class="col-xl-4 col-md-6">
                        <div class="htc__best__product">
                            <div class="htc__best__pro__thumb">
                                <a href="product-details.html">
                                    <img src="images/product-2/sm-img-2/3.jpg" alt="small product">
                                </a>
                            </div>
                            <div class="htc__best__product__details">
                                <h2><a href="product-details.html">dummy Product title</a></h2>
                                <ul class="rating">
                                    <li><i class="icon-star icons"></i></li>
                                    <li><i class="icon-star icons"></i></li>
                                    <li><i class="icon-star icons"></i></li>
                                    <li class="old"><i class="icon-star icons"></i></li>
                                    <li class="old"><i class="icon-star icons"></i></li>
                                </ul>
                                <ul class="top__pro__prize">
                                    <li class="old__prize">$82.5</li>
                                    <li>$75.2</li>
                                </ul>
                                <div class="best__product__action">
                                    <ul class="product__action--dft">
                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>
                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>
                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            </div>
        </section>
        <!-- End Top Rated Area -->
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
        <!-- Start Blog Area -->
        <section class="htc__blog__area bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Our Blog</h2>
                            <p>But I must explain to you how all this mistaken idea</p>
                        </div>
                    </div>
                </div>
                <div class="ht__blog__wrap row">
                    <!-- Start Single Blog -->
                    <div class="col-xl-4 col-md-6">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="images/blog/blog-img/1.jpg" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <div class="bl__date">
                                    <span>March 22, 2016</span>
                                </div>
                                <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, consec tetur adipisicing
                                        elit</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <div class="blog__btn">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                    <!-- Start Single Blog -->
                    <div class="col-xl-4 col-md-6">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="images/blog/blog-img/2.jpg" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <div class="bl__date">
                                    <span>May 22, 2019</span>
                                </div>
                                <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, consec tetur adipisicing
                                        elit</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <div class="blog__btn">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                    <!-- Start Single Blog -->
                    <div class="col-xl-4 col-md-6">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="images/blog/blog-img/3.jpg" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <div class="bl__date">
                                    <span>March 22, 2019</span>
                                </div>
                                <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, consec tetur adipisicing
                                        elit</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <div class="blog__btn">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
        <!-- End Banner Area -->
<?php 
require_once('footer.php'); ?>        