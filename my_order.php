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
                                  <span class="breadcrumb-item active">My Order</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- wishlist-area start -->
        <div class="wishlist-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-remove"><span class="nobr">Order ID</span></th>
                                                <th class="product-thumbnail">Date</th>
                                                <th class="product-name"><span class="nobr">Address</span></th>
                                                <th class="product-price"><span class="nobr">Payment Type</span></th>
                                                <th class="product-stock-stauts"><span class="nobr">Payment Status</span></th>
                                                <th class="product-add-to-cart"><span class="nobr">Order Status</span></th>
                                                <th class="product-add-to-cart"><span class="nobr">View</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $current_user_id = $_SESSION['user_id'];
                                            
                                            $sql_query = "SELECT product_order.*, order_status.id as status_id, order_status.name FROM product_order INNER JOIN order_status ON product_order.order_status = order_status.id WHERE user_id='$current_user_id'";

                                            $order_products = mysqli_query($con, $sql_query);

                                            $results = mysqli_fetch_all($order_products, MYSQLI_ASSOC);
                                            if( is_array($results) ):
                                                foreach( $results as $key => $value ):
                                            ?>
                                            <tr>
                                                <td><?php echo $value['id']; ?></td>
                                                <td><?php echo date( 'd-m-y', strtotime($value['created_at']) );  ?></td>
                                                <td><?php echo $value['address'].", ".$value['city']; ?></td>
                                                <td><?php echo $value['payment_type']; ?></td>
                                                <td><?php echo $value['payment_status'] == 0 ? 'Pending' : 'Sucess';  ?></td>
                                                <td><?php echo $value['name'];  ?></td>
                                                <td><a href="order_details.php?id=<?php echo $value['id']; ?>">Show Details</a></td>
                                            </tr>
                                                <?php 
                                                endforeach;
                                            endif; ?>


                                        </tbody>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wishlist-area end -->
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