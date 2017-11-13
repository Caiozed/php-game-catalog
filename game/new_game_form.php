<!DOCTYPE html>
<html>
    <?php include "../partials/libs.php";
        redirect_to_login();
    ?>
    <body>
        <section class="container">
            <?php include "../partials/header.php"?>
            <div class="jumbotron">
                <h1>Add Game</h1>
                <form enctype="multipart/form-data" action="./new_game.php" method="POST" class="form">
                    <?php include "./game_form.php"?>
                </form>
            </div>
        </section>
    </body>
</html>
