<?php
    include '../partials/database_connect.php';
    include '../partials/helper_functions.php';
    $name = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO users(username, password) VALUES ('$name', '$password')";
    if(mysqli_query($connection, $query)){
        redirect_to();
    }else{
        redirect_to("./signup_form.php");
    }
    
    mysqli_close($connection);
?>