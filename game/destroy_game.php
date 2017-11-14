<?php
    include "../partials/database_connect.php";
    include "../partials/helper_functions.php";
    redirect_to_login();
    $game_id = $_POST["game_id"];
    $image_path = $_POST["image"];
    $query = "DELETE FROM games WHERE id = '$game_id'";
    if(mysqli_query($connection, $query)){
        unlink($image_path);
        redirect_to("/user_profile.php");
    }else{
        echo "an error occurred";
    };
    mysqli_close($connection);
?>