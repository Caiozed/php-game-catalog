<?php
    include "current_user.php";
    include "database_connect.php";
    
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