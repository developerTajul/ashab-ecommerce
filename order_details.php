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
                                                <th class="product-remove"><span class="nobr">Sl. N</span></th>
                                                <th class="product-thumbnail">Product Name</th>
                                                <th class="product-name"><span class="nobr">Thumbnail</span></th>
                                                <th class="product-price"><span class="nobr">Qty</span></th>
                                                <th class="product-stock-stauts"><span class="nobr">Price</span></th>
                                                <th class="product-add-to-cart"><span class="nobr">Total Price</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if( isset( $_GET['id'] ) ){
                                                $current_order = $_GET['id'];
                                            }
                                            $current_user_id = $_SESSION['user_id'];

                                            
                                            $post_sql = "SELECT order_details.*, product.name,  product.thumbnail FROM order_details 
                                            INNER JOIN product ON order_details.product_id = product.product_id 
                                            WHERE order_id = $current_order
                                            ";

                                            $order_products = mysqli_query($con, $post_sql);

                                            // $order_products = mysqli_query($con, "SELECT * FROM order_details WHERE order_id='$current_order'");

                                            

                                            $results = mysqli_fetch_all($order_products, MYSQLI_ASSOC);

                                            if( is_array($results) ):
                                                $total_price = 0;
                                                foreach( $results as $value ):
                                                    $total_price = $total_price + ($value['price'] * $value['qty']);
                                            ?>
                                            <tr>
                                                <td><?php echo $value['product_id']; ?></td>
                                                <td><?php echo $value['name'];  ?></td>
                                                <td><img style="width:150px; height:150px" src="uploads/products/<?php echo $value['thumbnail']; ?>" alt="Product Name"></td>
                                                <td><?php echo $value['qty']; ?></td>
                                                <td><?php echo $value['price']; ?></td>
                                                <td><?php echo $value['price'] * $value['qty']; ?></td>
                                            </tr>
                                                <?php 
                                                endforeach;
                                            endif; ?>

                                            <tr>    
                                                <td colspan="4"></td>
                                                <td>Total Price</td>
                                                <td>$<?php echo $total_price; ?></td>
                                            </tr>
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