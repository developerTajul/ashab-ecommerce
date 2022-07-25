<?php 
class Add_To_Cart{

    public function addProduct( $pid, $qty ){
        $_SESSION['cart'][$pid]['qty'] = $qty;
    }

    public function updateProduct($pid, $qty){
        if( isset( $_SESSION['cart'][$pid] ) ){
            $_SESSION['cart'][$pid]['qty'] = $qty;
        }
    }

    public function removeProduct($pid){
        if( isset( $_SESSION['cart'][$pid] ) ){
            unset( $_SESSION['cart'][$pid] );
        }
    }

    public function emptyProduct(){
        unset( $_SESSION['cart'] );
    }

    public function totalProduct(){
        if( isset( $_SESSION['cart'] ) ){
            return count( $_SESSION['cart'] );
        }else{
            return 0;
        }
    }

    
}