<?php
    include '../partials/current_user.php';
    include '../partials/database_connect.php';
    include '../partials/helper_functions.php';
    redirect_to_login();
    echo $id = $current_user["id"]; 
    echo $name = $_POST['username'];
    echo $password = $_POST['password'];
    $query = "UPDATE users SET username='$name', password='$password' WHERE id='$id'";
    if(mysqli_query($connection, $query)){
        redirect_to();
    }else{
        redirect_to("./edit_user_form.php");
    }
    
    mysqli_close($connection);
?>