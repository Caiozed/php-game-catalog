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
            <a href="game/edit_game_form.php?game_id=<?= $id ?>" class="btn btn-danger">Edit</a>
        </div>
    </form>    
 </article>