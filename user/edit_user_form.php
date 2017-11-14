<!DOCTYPE html>
<html>
    <?php include '../partials/libs.php';
        redirect_to_login();
        $btn = "Update";
    ?>
    <body>
        <div class="container">
            <?php include '../partials/header.php' ?>
            <div class="jumbotron">
                <h1>Update yourself</h1>
                <form action="./edit_user.php" method="POST" class="form">
                    <?php include "user_form.php" ?>
                    <a class="btn btn-danger" href="./destroy_user.php">Delete</a>
                </form>
            </div>
        </div>
    </body>
</html>