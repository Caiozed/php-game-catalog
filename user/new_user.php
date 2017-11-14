<?php
    include '../partials/database_connect.php';
    include '../partials/helper_functions.php';
    session_start();
    $name = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO users(username, password) VALUES ('$name', '$password')";
    if(mysqli_query($connection, $query)){
        redirect_to();
    }else{
        $_SESSION['errors'] = "User already exists pick other username";
        redirect_to("./signup_form.php");
    }
    
    mysqli_close($connection);
?>