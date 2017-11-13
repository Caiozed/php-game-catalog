<!DOCTYPE html>
<html>
    <?php include "partials/libs.php";
        redirect_to_login();
    ?>
    <body>
        <section class="container">
            <?php include "partials/header.php" ?>
            <section>
                <?php include "game/games_list.php" ?>
            </section>
        </section>
    </body>
</html>