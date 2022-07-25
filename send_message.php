<?php 
require_once('admin/inc/config.php');
require_once('functions.php'); 
require_once('inc/template-helper.php');


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


printf("%s %s %s %s", $name, $email, $subject, $message);

$result = mysqli_query($con, "INSERT INTO  contact_us (name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')");

if($result){
    echo "Data Inserted Successfully";
}