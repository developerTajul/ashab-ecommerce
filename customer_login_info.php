<?php 
session_start();
require_once('admin/inc/config.php');
require_once('functions.php'); 
require_once('inc/template-helper.php');
$email = mysqli_real_escape_string($con, trim($_POST['email']));
$password = mysqli_real_escape_string($con, trim(md5($_POST['password'])));


$login_data = mysqli_query($con, "SELECT * FROM customers WHERE email='$email' && password='$password'");



if( mysqli_num_rows($login_data) >= 1 ){

    $data = mysqli_fetch_assoc($login_data);
    $_SESSION['name'] = $data['name'];
    $_SESSION['email'] = $data['email'];
    echo "login_success";
}else{
    echo "login_fail";
}