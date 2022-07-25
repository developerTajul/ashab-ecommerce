<?php 
require_once('admin/inc/config.php');
require_once('functions.php'); 
require_once('inc/template-helper.php');

$name       = mysqli_real_escape_string($con, trim($_POST['name']));
$email      = mysqli_real_escape_string($con, trim($_POST['email']));
$mobile     = mysqli_real_escape_string($con, trim($_POST['mobile']));
$password   = mysqli_real_escape_string($con, trim(md5($_POST['password'])));

$result = mysqli_query($con, "INSERT INTO customers(name, email, mobile, password) VALUES('$name', '$email', '$mobile', '$password')");

if($result){
    echo "Customer Registration Successful";
}else{
    echo "Customer Registration Fails";
}