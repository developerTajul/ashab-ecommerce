<?php 

function is_user_logged_in(){
    if( isset($_SESSION['name']) ){
        return true;
    }
}
