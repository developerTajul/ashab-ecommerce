<?php 
require_once('header.php'); ?>

       <div class="body__overlay"></div>
       <!-- Start Offset Wrapper -->
       <div class="offset__wrapper">
           <!-- Start Search Popap -->
           <div class="search__area">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="search__inner">
                               <form action="#" method="get">
                                   <input placeholder="Search here... " type="text">
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
                       <div class="shp__single__product">
                           <div class="shp__pro__thumb">
                               <a href="#">
                                   <img src="images/product-2/sm-smg/1.jpg" alt="product images">
                               </a>
                           </div>
                           <div class="shp__pro__details">
                               <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                               <span class="quantity">QTY: 1</span>
                               <span class="shp__price">$105.00</span>
                           </div>
                           <div class="remove__btn">
                               <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                           </div>
                       </div>
                       <div class="shp__single__product">
                           <div class="shp__pro__thumb">
                               <a href="#">
                                   <img src="images/product-2/sm-smg/2.jpg" alt="product images">
                               </a>
                           </div>
                           <div class="shp__pro__details">
                               <h2><a href="product-details.html">Brone Candle</a></h2>
                               <span class="quantity">QTY: 1</span>
                               <span class="shp__price">$25.00</span>
                           </div>
                           <div class="remove__btn">
                               <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                           </div>
                       </div>
                   </div>
                   <ul class="shoping__total">
                       <li class="subtotal">Subtotal:</li>
                       <li class="total__price">$130.00</li>
                   </ul>
                   <ul class="shopping__btn">
                       <li><a href="cart.html">View Cart</a></li>
                       <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                   </ul>
               </div>
           </div>
           <!-- End Cart Panel -->
       </div>
       <!-- End Offset Wrapper -->
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
                                  <span class="breadcrumb-item active">Contact Us</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Contact Area -->
        <section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="map-contacts--2">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <h2 class="title__line--6">CONTACT US</h2>
                        <div class="address">
                            <div class="address__icon">
                                <i class="icon-location-pin icons"></i>
                            </div>
                            <div class="address__details">
                                <h2 class="ct__title">our address</h2>
                                <p>Your Address Here </p>
                            </div>
                        </div>
                        <div class="address">
                            <div class="address__icon">
                                <i class="icon-envelope icons"></i>
                            </div>
                            <div class="address__details">
                                <h2 class="ct__title">Your Email</h2>
                                <p>asbab@example.com</p>
                            </div>
                        </div>

                        <div class="address">
                            <div class="address__icon">
                                <i class="icon-phone icons"></i>
                            </div>
                            <div class="address__details">
                                <h2 class="ct__title">Phone Number</h2>
                                <p>111-1111-111111</p>
                            </div>
                        </div>
                    </div>      
                </div>
                <div class="row">
                    <div class="contact-form-wrap mt--60">
                        <div class="col-lg-12">
                            <div class="contact-title">
                                <h2 class="title__line--6">SEND A MAIL</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <form  class="contact_form_submit" action="" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" id="name" name="name" placeholder="Your Name*">
                                        <input type="email" id="email" name="email" placeholder="Mail*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box subject">
                                        <input type="text" id="subject" name="subject" placeholder="Subject*">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="button" onclick="send_message()" name="contact_form" class="fv-btn">Send MESSAGE</button>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-message"></p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- End Contact Area -->
        <!-- End Banner Area -->
<?php
require_once('footer.php');  
