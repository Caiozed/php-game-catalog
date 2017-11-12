<?php
    include "database_connect.php";
    include "./helper_functions.php";
    $user_id = $current_user['id'];
    $limit = 10;
    
    if(isset($_GET["page"])){
        $page = $_GET["page"];
    }else{
        $page = 1;
    };
    
    $start_from = ($page-1) * $limit;
    $query = "SELECT * FROM games where user_id = '$user_id' ORDER BY name ASC LIMIT $start_from, $limit";
    $query2 = "SELECT COUNT(id) FROM games WHERE user_id = '$user_id'";  
    $results = mysqli_query($connection, $query);
    $result = mysqli_query($connection, $query2);
    $games = array();
    
    while($game = $results->fetch_array()){
        $games[] = $game;
    }
    
    
    foreach($games as $game){
        $id = $game['id'];
        $image = $game['image']; 
        $name = $game['name'];
        $status = $game['status'];
        $status_class = strtolower(preg_replace('/\s+/', '', $game['status']));
        include "game_template.php";
    }   
    
    $row = $result->fetch_row();  
    $total_records = $row[0];  
    $total_pages = ceil($total_records / $limit);  
    $pagLink = "<div class='pagination-custom'>
                <a class='btn btn-primary' href='user_profile.php?page=".clamp(($page-1), 1, $total_pages)."'>Previous</a>";  
    for ($i=1; $i<=$total_pages; $i++) {  
                 $pagLink .= "<a class='btn btn-primary' href='user_profile.php?page=".$i."'>".$i."</a>";  
    };  
    echo $pagLink . "<a class='btn btn-primary' href='user_profile.php?page=".clamp(($page+1), 1, $total_pages)."'>Next</a></div>";  
    
    
    mysqli_close($connection);
?>