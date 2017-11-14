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
            //Set upload directory
            $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/uploads/games/'.$game_id.'/'.$file["name"];
            
            //Remove old files
            $files_to_remove = glob($_SERVER['DOCUMENT_ROOT'].'/uploads/games/'.$game_id.'/*');
            foreach($files_to_remove as $file_to_remove){ 
              if(is_file($file_to_remove))
                unlink($file_to_remove); 
            }
            
            //Set image path to be saved on database
            $db_dir = '/uploads/games/'.$game_id.'/'.$file["name"];
            
            //Create folder if none exists
            if (!file_exists($_SERVER['DOCUMENT_ROOT'].'/uploads/games/'.$game_id.'/')) {
                mkdir($_SERVER['DOCUMENT_ROOT'].'/uploads/games/'.$game_id.'/', 0777, true);
            }
            
            //Update image path on database
            $query = "UPDATE games SET image = '$db_dir' WHERE id = '$game_id'";
             if(mysqli_query($connection, $query)){
                //Save file to server 
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