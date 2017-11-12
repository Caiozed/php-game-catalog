<html>
    <?php include 'partials/libs.php'?>
    <body>
    <div class="container">
        <?php include 'partials/header.php' ?>
        <section class="jumbotron">
            <?php if (isLoggedIn()){ ?>
                    <h1>Hello, <?= $current_user["username"] ?></h1>
                    <figure><img src=""></img></figure>
                    <p>Get started adding your games!</p>
                    <p><a href="new_game_form.php" class="btn btn-primary">Add Game</a></p>
            <?php }else{ ?>
                    <h1>Welcome</h1>
                    <figure><img src=""></img></figure>
                    <p>here you can record off all your played games!</p>
                    <p><a href="/signup_form.php" class="btn btn-primary">Sign up</a></p>
            <?php }?>
        </section>
    </div>
</body>
</html>