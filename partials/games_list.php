<?php
    include "database_connect.php";
    $user_id = $current_user['id'];
    $query = "SELECT * FROM games where user_id = '$user_id'";
    $results = mysqli_query($connection, $query);
    $games = array();
    
    while($game = $results->fetch_array()){
        $games[] = $game;
    }
    
    function getGames($games){
        foreach($games as $game){
            $image = $game['image']; 
            $name = $game['name'];
            $status = $game['status'];
            echo "<h1>$name</h1>
                <img width=500px src='$image'>
                <p>$status</p>";
        }   
    }
    getGames($games);
    mysqli_close($connection);
?>