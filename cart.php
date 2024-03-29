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
                                  <span class="breadcrumb-item active">shopping cart</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">products</th>
                                            <th class="product-name">name of products</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach( $_SESSION['cart'] as $key => $value ): 

                                            $productArray = get_products($con, '', '', $key);
                                           
                                            
                                            $product_id = $productArray[0]['product_id'];
                                            $name = $productArray[0]['name'];
                                            $thumbnail = $productArray[0]['thumbnail'];
                                            $regular_price = $productArray[0]['regular_price'];
                                            $sale_price = $productArray[0]['sale_price'];
                                            
                                            $qty = (int)$value['qty'];
                                            
                                            
                                        ?>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="uploads/products/<?php echo $thumbnail; ?>" alt="product img" /></a></td>
                                            <td class="product-name"><a href="#"><?php echo $name; ?></a>
                                                <ul  class="pro__prize">
                                                    <li class="old__prize">$<?php echo $regular_price; ?></li>
                                                    <li>$<?php echo $sale_price; ?></li>
                                                </ul>
                                            </td>
                                            <td class="product-price"><span class="amount">$<?php echo $sale_price; ?></span></td>
                                            <td class="product-quantity">
                                                <input type="number" id="<?php echo $product_id.'qty'; ?>" value="<?php  echo $qty; ?>" /><br />
                                                <a href="javascript:void()" onclick="manage_cart('<?php echo $product_id; ?>', 'update')">Update</a>
                                            </td>
                                            <td class="product-subtotal">$<?php echo $qty * $sale_price; ?></td>
                                            <td class="product-remove">
                                                <a href="javascript:void()" onclick="manage_cart('<?php echo $product_id; ?>', 'remove')"><i class="icon-trash icons"></i></a>
                                            </td>
                                        </tr>
                                        <?php 
                                        endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="buttons-cart--inner">
                                        <div class="buttons-cart">
                                            <a href="index.php">Continue Shopping</a>
                                        </div>
                                        <div class="buttons-cart checkout--btn">
                                            <a href="#">update</a>
                                            <a href="checkout.php">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ht__coupon__code">
                                        <span>enter your discount code</span>
                                        <div class="coupon__box">
                                            <input type="text" placeholder="">
                                            <div class="ht__cp__btn">
                                                <a href="#">enter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 smt-40 xmt-40">
                                    <div class="htc__cart__total">
                                        <h6>cart total</h6>
                                        <div class="cart__desk__list">
                                            <ul class="cart__desc">
                                                <li>cart total</li>
                                                <li>tax</li>
                                                <li>shipping</li>
                                            </ul>
                                            <ul class="cart__price">
                                                <li>$909.00</li>
                                                <li>$9.00</li>
                                                <li>0</li>
                                            </ul>
                                        </div>
                                        <div class="cart__total">
                                            <span>order total</span>
                                            <span>$918.00</span>
                                        </div>
                                        <ul class="payment__btn">
                                            <li class="active"><a href="#">payment</a></li>
                                            <li><a href="#">continue shopping</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form> 
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