<!DOCTYPE html>
<html>
    <?php include '../partials/libs.php'?>
    <body>
        <div class="container">
            <?php include '../partials/header.php' ?>
            <div class="jumbotron">
                <h1>Sign Up</h1>
                <form action="./new_user.php" method="POST" class="form">
                    <?php include "user_form.php" ?>
                </form>
            </div>
        </div>
    </body>
</html>