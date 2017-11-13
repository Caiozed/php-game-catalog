<?php
    include "../partials/current_user.php";
    include "../partials/database_connect.php";
    include "../partials/helper_functions.php";
    redirect_to_login();
    $status = $_POST["status"];
    $id = $_POST["game_id"];
    $query = "UPDATE games SET status='$status' WHERE id='$id'";
    
    if(mysqli_query($connection, $query)){
        header("Location: /user_profile.php");
    }else{
        header("Location: /user_profile.php");
    }
    
    mysqli_close($connection);
?>