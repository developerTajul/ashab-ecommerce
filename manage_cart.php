<?php 
session_start();
require_once('admin/inc/config.php');
require_once('functions.php'); 
require_once('inc/template-helper.php');
require_once('add_to_cart.php');

$pid = mysqli_real_escape_string($con, trim($_POST['pid']));
$qty = mysqli_real_escape_string($con, trim($_POST['qty']));
$type = mysqli_real_escape_string($con, trim($_POST['type']));

$obj = new Add_To_Cart();

if( $type == 'add' ){
    $obj->addProduct($pid, $qty);
}

if( $type == 'remove' ){
    $obj->removeProduct( $pid );
}

if( $type == 'update' ){
    $obj->updateProduct($pid, $qty);
}

echo $obj->totalProduct();