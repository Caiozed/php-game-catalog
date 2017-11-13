<?php
    include 'database_connect.php';
    include "helper_functions.php";
    session_start();
    $name = $_POST['username'];
    $password = $_POST['password'];
    echo $remember_me = $_POST['remember_me'];
    $query = "SELECT * FROM users WHERE username = '$name' and password = '$password' ";
    $result = mysqli_query($connection, $query);
    if($result->num_rows != 0){
        $user = $result->fetch_array();
        $_SESSION["user_id"] = $user["id"];
        if($remember_me == "on"){
            setcookie("user_id", $user["id"], time() + (86400 * 30), "/");
        }
        redirect_to();
    }else{
        redirect_to ("/login_form.php");
    }
    
    mysqli_close($connection);
?>