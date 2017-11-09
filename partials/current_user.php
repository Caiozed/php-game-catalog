<?php
    include 'database_connect.php';
    session_start();
    $current_user = null;
    
    if(isset($_COOKIE["user_id"])){
        $id = $_COOKIE["user_id"];
    }else if(isset($_SESSION["user_id"])){
        $id = $_SESSION["user_id"];
    }else{
        $id = null;
    }
    
    $query = "SELECT * FROM users WHERE id = '$id' ";
    $result = mysqli_query($connection, $query);
    $current_user = $result->fetch_array();
    echo $current_user["username"];
    mysqli_close($connection);
    
    function isLoggedIn(){
        if(isset($_SESSION["user_id"])||isset($_COOKIE["user_id"])){
            return true; 
        }
        else{
            return false;
        } 
    }
?>