<?php
    session_start();
    $errors = [];
    if(isset($_SESSION["errors"])){
        $errors[] = $_SESSION["errors"];
    }
    if($errors){
        echo "<div class='alert alert-danger'><ul>";
        foreach($errors as $error){
          echo "<li>$error</li>";  
        }
        echo "</ul></div>";
    }
    unset($_SESSION['errors']);
?>