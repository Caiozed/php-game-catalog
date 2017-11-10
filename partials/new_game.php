<?php
    include "current_user.php";
    include "database_connect.php";
    $file = $_FILES["image"];
    $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/uploads/'.$file["name"];
    $gamename = $_POST["name"];
    $gamestatus = $_POST["status"];
    $gameimage =  $uploaddir;
    $user_id = $current_user["id"];
    $query = "INSERT INTO games(name, status, image, user_id) VALUES ('$gamename', '$gamestatus', '$gameimage', '$user_id')";
    if(mysqli_query($connection, $query)){
        $last_id = $connection->insert_id;
        $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/uploads/games/'.$last_id.'/'.$file["name"];
        $db_dir = '/uploads/games/'.$last_id.'/'.$file["name"];
        
        mkdir($_SERVER['DOCUMENT_ROOT'].'/uploads/games/'.$last_id.'/', 0777, true);
        $query = "UPDATE games SET image = '$db_dir' WHERE id = '$last_id'";
        if(mysqli_query($connection, $query)){
            move_uploaded_file($file["tmp_name"], $uploaddir);
            header("Location: /index.php"); 
        }else{
            header("Location: /game-form.php");
        }
    }else{
        header("Location: /game-form.php");
    };

   mysqli_close($connection);
?>