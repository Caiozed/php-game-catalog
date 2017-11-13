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
    $user_id = $current_user["id"];
    $query = "INSERT INTO games(name, status, image, user_id) VALUES ('$gamename', '$gamestatus', '$gameimage', '$user_id')";
    if(mysqli_query($connection, $query)){
        if($_FILES["image"]["error"] == 4){
            redirect_to("/user_profile.php");
        }else{
            $last_id = $connection->insert_id;
            $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/uploads/games/'.$last_id.'/'.$file["name"];
            $db_dir = '/uploads/games/'.$last_id.'/'.$file["name"];
            if (!file_exists($_SERVER['DOCUMENT_ROOT'].'/uploads/games/'.$last_id.'/')) {
                mkdir($_SERVER['DOCUMENT_ROOT'].'/uploads/games/'.$last_id.'/', 0777, true);
            }
            $query = "UPDATE games SET image = '$db_dir' WHERE id = '$last_id'";
             if(mysqli_query($connection, $query)){
                move_uploaded_file($file["tmp_name"], $uploaddir);
                redirect_to("/user_profile.php");
            }else{
                redirect_to("./new_game_form.php");
            }
        }

    }else{
        redirect_to("./new_game_form.php");
    };

   mysqli_close($connection);
?>