<html>
    <?php include 'partials/libs.php'?>
    <body>
    <div class="container">
        <?php include 'partials/header.php' ?>
        <section class="jumbotron">
            <?php if (is_logged_in()){ ?>
                    <h1>Hello, <?= $current_user["username"] ?></h1>
                    <figure><img src=""></img></figure>
                    <p>Get started adding your games!</p>
                    <p><a href="game/new_game_form.php" class="btn btn-primary">Add Game</a></p>
            <?php }else{ ?>
                    <h1>Welcome</h1>
                    <p>here you can record off all your played games!</p>
                    <p><a href="user/signup_form.php" class="btn btn-primary">Sign up</a></p>
            <?php }?>
        </section>
    </div>
</body>
</html>