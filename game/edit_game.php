<?php
    include "../partials/current_user.php";
    include "../partials/database_connect.php";
    include "../partials/helper_functions.php";
    redirect_to_login();
    $file = $_FILES["image"];
    $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/uploads/'.$file["name"];
    $gamename = $_POST["name"];
    $gamestatus = $_POST["status"];
    $gameimage =  $uploaddir;
    $game_id = $_POST["game_id"];
    $user_id = $current_user["id"];
    $query = "UPDATE games SET name='$gamename', status='$gamestatus' WHERE id = '$game_id'";
    if(mysqli_query($connection, $query)){
        if($_FILES["image"]["error"] == 4){
            redirect_to("/user_profile.php");
        }else{
            $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/uploads/games/'.$game_id.'/'.$file["name"];
            $db_dir = '/uploads/games/'.$game_id.'/'.$file["name"];
            if (!file_exists($_SERVER['DOCUMENT_ROOT'].'/uploads/games/'.$game_id.'/')) {
                mkdir($_SERVER['DOCUMENT_ROOT'].'/uploads/games/'.$game_id.'/', 0777, true);
            }
            $query = "UPDATE games SET image = '$db_dir' WHERE id = '$game_id'";
             if(mysqli_query($connection, $query)){
                move_uploaded_file($file["tmp_name"], $uploaddir);
                redirect_to("/user_profile.php");
            }else{
                redirect_to("./edit_game_form.php?game_id=$game_id");
            }
        }

    }else{
        redirect_to("./edit_game_form.php?game_id=$game_id");
    };

   mysqli_close($connection);
?>