<?php
    include 'database_connect.php';
    
    $name = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO users(username, password) VALUES ('$name', '$password')";
    if(mysqli_query($connection, $query)){
        echo "New user created";
        header("Location: /index.php");
    }
    
    mysqli_close($connection);
?>