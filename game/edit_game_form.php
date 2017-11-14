<!DOCTYPE html>
<html>
    <?php include "../partials/libs.php";
        include "../partials/database_connect.php";
        redirect_to_login();
        $btn = "Update";
        $game_id = $_GET["game_id"];
        $query = "SELECT * FROM games WHERE id = '$game_id'";
        $game = mysqli_query($connection, $query);
        $game = $game->fetch_array();
        mysqli_close($connection);
    ?>
    <body>
        <section class="container">
            <?php include "../partials/header.php"?>
            <div class="jumbotron">
                <h1>Edit Game</h1>
                <form enctype="multipart/form-data" action="./edit_game.php" method="POST" class="form">
                    <?php include "./game_form.php"?>
                </form>
            </div>
        </section>
    </body>
</html>
