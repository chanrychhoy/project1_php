<?php
require_once('../partial/header.php');

?>

<div class="container p-4">
    <div class="d-flex justify-content-end pb-2">
        <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
    </div>
    <form action="create_vuejs_model.php" method="post" class="p-5 bg-secondary rounded " enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="title" name="title">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="description" name="desc">
        </div>
        <div class="form-group">
            <input type="file" id="myFile" name="img" width="200" height="200">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Create</button>
        </div>
    </form>
</div>