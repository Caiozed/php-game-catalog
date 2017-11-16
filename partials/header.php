<nav class="navbar-inverse">
    <ul class="nav navbar">
        <li><a href="/index.php">Home</a></li>
        <li><a href="/user/edit_user_form.php">Update info</a></li>
        <?php
            include "current_user.php";
            echo is_logged_in();
            if(!is_logged_in()){
                echo '<li><a href="/login_form.php">Log in</a></li>';    
            }else{
                echo'<li><a href="/user_profile.php">Profile</a></li>
                     <li><a href="/logout.php">Log out</a></li>';    
            }
        ?>
    </ul>
</nav>