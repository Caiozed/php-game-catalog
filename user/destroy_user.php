<?php
    include "../partials/current_user.php";
    include "../partials/database_connect.php";
    include "../partials/helper_functions.php";
    redirect_to_login();
    $query = "DELETE users FROM users WHERE id = '$id'";
    $query2 = "SELECT * FROM games WHERE user_id = '$id'";
    $query3 = "DELETE games FROM games WHERE user_id = '$id'";
    $results = mysqli_query($connection, $query2);
    $games = [];
    
    while($game = $results->fetch_array()){
        $games[] = $game; 
    }
    
    foreach($games as $game){
        unlink($_SERVER["DOCUMENT_ROOT"].$game["image"]);
    }
    
    if(mysqli_query($connection, $query3) && mysqli_query($connection, $query)){
        redirect_to("/logout.php");
    }else{
        echo "an error has occurred";
    }
?>