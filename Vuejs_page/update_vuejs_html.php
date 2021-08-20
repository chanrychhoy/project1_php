<?php
require_once('../partial/header.php');

?>
<div class="container p-4">
    <?php
        require_once('../database/database.php');
        $vueId = $_GET['postID'];
        $vue_lessons = selectOnelesson_vue($vueId);
        foreach ($vue_lessons as $vue_lesson) :
    ?>
        <form action="update_vuejs_model.php" method="post">
            <input type="hidden" value="<?= $vue_lesson['lesson_id'] ?>" name="lesson_id">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="title" name="title" value="<?= $vue_lesson['title'] ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="decription" name="desc" value="<?= $vue_lesson['description'] ?>">
            </div>
            <div class="form-group">
                <input type="file" id="myFile" name="img" value="<?=$vue_lesson['img'] ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
    <?php endforeach; ?>
</div>