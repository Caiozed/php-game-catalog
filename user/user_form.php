<div class="form-group">
    <label for="username">Name</label>
    <input class="form-control form-control-sm" type="text" name="username" value="<?= $current_user['username'] ?>" required/>
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input class="form-control form-control-sm" type="password" name="password" value="<?= $current_user['password'] ?>"required/>
</div>
<input type="submit" value="<?= $btn ?>" class="btn btn-primary"/>