<?php
    require_once('../partial/header.php');
    
?>
<div class="container p-4">
    <form action="create_php_model.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="title" name="title">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="description" name="desc">
        </div>
        <div class="form-group">
            <input type="file" id="myFile"  name="img">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Create</button>
        </div>
    </form>
</div>