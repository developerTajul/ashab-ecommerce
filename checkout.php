<?php 
require_once('header.php'); 

if( !empty($_SESSION['cart']) <= 0  ){
    ?>
    <script>
        window.location.href="index.php";
    </script>
    <?php
}

$cart_total = 0;
foreach( $_SESSION['cart'] as $key => $value ): 
    $productArray = get_products($con, '', '', $key);
    $sale_price = $productArray[0]['sale_price'];
    $qty = $value['qty'];
    $cart_total = $cart_total + ($qty*$sale_price);
endforeach;    


if( isset( $_POST['checkout_submit']) ){
    
    $address        = mysqli_real_escape_string($con, trim($_POST['address']));
    $city           = mysqli_real_escape_string($con, trim($_POST['city']));
    $post_code      = mysqli_real_escape_string($con, trim($_POST['post_code']));
    $payment_type   = mysqli_real_escape_string($con, trim($_POST['payment_type']));
   
    $user_id        = $_SESSION['user_id'];
    $total_price    = $cart_total;

    $payment_status = 'pending';
    if( $payment_type == 'cod' ){
        $payment_status = 'success';
    }

    $order_status = '1';


    $result = mysqli_query($con, "INSERT INTO product_order (user_id, address, city, post_code, payment_type, total_price, payment_status) VALUES('$user_id', '$address', '$city', '$post_code', '$payment_type', '$total_price', '$payment_status')");

    if( $result ){
        
        $order_id = mysqli_insert_id($con);

        if( is_array( $_SESSION['cart'] ) ):
            foreach( $_SESSION['cart'] as $key => $value ): 
                $productArray = get_products($con, '', '', $key);
                $product_id = $productArray[0]['product_id'];
                $sale_price = $productArray[0]['sale_price'];
                $qty = $value['qty'];
                mysqli_query($con, "INSERT INTO order_details(order_id, product_id, qty, price)VALUES('$order_id', '$product_id', '$qty', '$sale_price')");
            endforeach;

            unset($_SESSION['cart']);
            ?>
            <script>
                window.location.href = 'thank_you.php'
            </script>
            <?php
            
        endif; 
    }else{
        echo "Fails to insert data";
    }


    
}


?>


        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">checkout</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="checkout-wrap ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout__inner">
                            <div class="accordion-list">
                                <div class="accordion">
                                    <?php 
                                    if( !isset( $_SESSION['email'] ) ): ?>

                             
                                    <div class="accordion__title">
                                        Checkout Method
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__body__form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="checkout-method">
                                                        <h5 class="checkout-method__title">Register Now</h5>
                                                        <form action="#">
                                                            <div class="single-input">
                                                                <label for="user-email">Name</label>
                                                                <input type="text" id="user-email">
                                                            </div>
                                                            <div class="single-input">
                                                                <label for="user-email">Email Address</label>
                                                                <input type="email" name="email" id="user-email">
                                                            </div>
                                                            <div class="single-input">
                                                                <label for="user-pass">Password</label>
                                                                <input type="password" id="user-pass">
                                                            </div>
                                                            <p class="require">* Required fields</p>
                                                            <a href="#">Forgot Passwords?</a>
                                                            <div class="dark-btn">
                                                                <a href="#">LogIn</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-method__login">
                                                        <h5 class="checkout-method__title">Login</h5>
                                                        <form action="#" method="post                                 ">
                                                            
                                                            <div class="single-input">
                                                                <label for="user-email">Email Address</label>
                                                                <input type="email" name="loginEmail" id="user-email">
                                                            </div>
                                                            <div class="single-input">
                                                                <label for="user-pass">Password</label>
                                                                <input type="password" name="loginPassword" id="user-pass">
                                                            </div>
                                                            <p class="require">* Required fields</p>
                                                            <a href="#">Forgot Passwords?</a>
                                                            <div class="dark-btn">
                                                                <button type="button" class="btn btn-primary" onclick="userLoginFromCheckout()">Login</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    endif; ?>    
                                    <?php 
                                    if( !isset( $_SESSION['email'] ) ): 
                                        $class = "accordion__hide";
                                    else:
                                        $class = "accordion__title";
                                    endif; ?>
                                <form action="" method="post">
                                    <div class="<?php echo $class; ?>">
                                        Billing Information
                                    </div>

                                    
                                        <div class="accordion__body">
                                            <div class="bilinfo">
                                            
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                                <input type="text" name="address" placeholder="Street Address">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" name="city" placeholder="City/State">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-input">
                                                                <input type="text" name="post_code" placeholder="Post code/ zip">
                                                            </div>
                                                        </div>
                                                    </div>
                                        
                                            </div>
                                        </div>

                                        <div class="accordion__title">
                                            payment information
                                        </div>
                                        <div class="accordion__body">
                                            <div class="paymentinfo">
                                                
                                               <p>
                                                <input type="radio" name="payment_type" value="cod">
                                                <label for="">Cash on Delivery</label>
                                                <input type="radio" name="payment_type" value="payU">
                                                <label for="">Pay You</label>
                                               </p>

                                                
                                            </div>
                                        </div>

                                        <input type="submit" name="checkout_submit" value="Register Now" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-details">
                            <h5 class="order-details__title">Your Order</h5>
                            <div class="order-details__item">
                            <?php
                                foreach( $_SESSION['cart'] as $key => $value ): 
                                    $productArray = get_products($con, '', '', $key);
                                    $product_id = $productArray[0]['product_id'];
                                    $name = $productArray[0]['name'];
                                    $thumbnail = $productArray[0]['thumbnail'];
                                    $regular_price = $productArray[0]['regular_price'];
                                    $sale_price = $productArray[0]['sale_price'];
                                    $qty = $value['qty'];
                                    
                                ?>
                                <div class="single-item">
                                    <div class="single-item__thumb">
                                        <img src="uploads/products/<?php echo $thumbnail; ?>" alt="<?php echo $name; ?>">
                                    </div>
                                    <div class="single-item__content">
                                        <a href="product.php?product_id=<?php echo $product_id; ?>"><?php echo $name; ?></a>
                                        <span class="price">$<?php echo $qty * $sale_price; ?></span>
                                    </div>
                                    <div class="single-item__remove">
                                        <a href="javascript:void()" onclick="manage_cart('<?php echo $product_id; ?>', 'remove')"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
                                <?php 
                                endforeach; ?>
                            </div>
                            <div class="order-details__count">
                                <div class="order-details__count__single">
                                    <h5>sub total</h5>
                                    <span class="price">$<?php echo $cart_total; ?></span>
                                </div>
                                <div class="order-details__count__single">
                                    <h5>Tax</h5>
                                    <span class="price">$9.00</span>
                                </div>
                                <div class="order-details__count__single">
                                    <h5>Shipping</h5>
                                    <span class="price">0</span>
                                </div>
                            </div>
                            <div class="ordre-details__total">
                                <h5>Order total</h5>
                                <span class="price">$918.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
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
        <!-- End Banner Area -->
<?php 
require_once('footer.php');