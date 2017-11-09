<nav>
    <ul class="navbar nav">
        <li><a href="/index.php">Home</a></li>
        <li><a href="/newest.php">Newest</a></li>
        <li><a href="/newest.php">Newest</a></li>
        <?php
            include "current_user.php";
            if(!isLoggedIn()){
                echo '<li><a href="/login.php">Log in</a></li>';    
            }else{
                echo '<li><a href="/logout.php">Log out</a></li>';    
            }
        ?>
    </ul>
</nav>