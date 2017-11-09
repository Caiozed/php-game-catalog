<!DOCTYPE html>
<html>
    <?php include 'partials/libs.php'?>
    <body>
        <div class="container">
            <?php include 'partials/header.php' ?>
            <div class="jumbotron">
                <h1>Log in</h1>
                <form action="partials/login_form.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input class="form-control form-control-sm" type="text" name="username" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control form-control-sm" type="password" name="password" required/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/>
                        <label for="remember_me">Remember me</label>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </body>
</html>