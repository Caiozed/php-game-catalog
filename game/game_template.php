<article class='game'>
    <h1 class="center-text"><?= $name ?></h1>
    <img width=500px src='<?= $image ?>'>
    <h3 class="center-text">Status</h3>
    <p class="center-text <?= $status_class ?> game-status"><?= $status ?></p>
    <form action='game/edit_game_status.php' method='POST' class='form'>
        <?php include('game_status_options.php') ?>
        <input type="hidden" name="game_id" value="<?= $id ?>"/>
        <div class="options">
            <input type="submit" value="Update Status" class="btn btn-primary"/>
            <span class="more btn btn-info"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
        </div>
    </form> 
    
    <div class="hidden-options">
        <form action='game/destroy_game.php' method='POST' class='form'>
            <a href="game/edit_game_form.php?game_id=<?= $id ?>" class="btn btn-primary">Edit</a>
            <input type="submit" value="Delete" class="btn btn-danger"/>
            <input type="hidden" name="game_id" value="<?= $id ?>"/>
            <input type="hidden" name="image" value="<?= $_SERVER["DOCUMENT_ROOT"].$image ?>"/>
        </form>
    </div>
 </article>