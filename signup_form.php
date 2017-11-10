<!DOCTYPE html>
<html>
    <?php include 'partials/libs.php'?>
    <body>
        <div class="container">
            <?php include 'partials/header.php' ?>
            <div class="jumbotron">
                <h1>Sign Up</h1>
                <form action="partials/new_user.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input class="form-control form-control-sm" type="text" name="username" required/>
                    </div>
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control form-control-sm" type="password" name="password" required/>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </body>
</html>