<?php
    session_start();
    session_destroy();
    setcookie("user_id", "", -1);
    header("Location: /index.php");
?>