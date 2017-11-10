<!DOCTYPE html>
<html>
    <?php include "partials/libs.php"?>
    <body>
        <section class="container">
            <?php include "partials/header.php"?>
            <div class="jumbotron">
                <h1>Log in</h1>
                <form enctype="multipart/form-data" action="partials/new_game.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control form-control-sm" type="text" name="name" required/>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control form-control-sm" name="status" required>
                            <option value="Not owned">Not owned</option>
                            <option value="Started">Started</option>
                            <option value="In progress">In progress</option>
                            <option value="Finished">Finished</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Add game Image</label>
                        <input type="file" name="image" class="form-control-file"/>
                        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    </div>
                    <input type="submit" value="Add Game" class="btn btn-primary"/>
                </form>
            </div>
        </section>
    </body>
</html>


