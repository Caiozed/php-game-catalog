<div class="form-group">
    <label for="name">Name</label>
    <input class="form-control form-control-sm" type="text" name="name" value="<?= $game['name'] ?>" required/>
</div>
<div class="form-group">
    <label for="status">Status</label>
    <?php include "game_status_options.php"?>
</div>
<div class="form-group">
    <label for="image">Game image</label>
    <input type="file" name="image" class="form-control-file" value="<?= $game['image'] ?>"/>
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <?php if(isset($_GET["game_id"])){ ?>
        <input type="hidden" name="game_id" value="<?=$game_id?>" />
    <?php } ?>
</div>
<input type="submit" value="Add Game" class="btn btn-primary"/>



