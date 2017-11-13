<?php
    function clamp($current, $min, $max) {
        return max($min, min($max, $current));
    };
    
    function is_logged_in(){
        if(isset($_SESSION["user_id"])||isset($_COOKIE["user_id"])){
            return true; 
        }
        else{
            return false;
        } 
    }
    
    function redirect_to_login(){
        if(!is_logged_in()){
            redirect_to("/login_form.php");
        }
    }
    
    function redirect_to($path="/"){
        header("Location: $path");
    }
?>