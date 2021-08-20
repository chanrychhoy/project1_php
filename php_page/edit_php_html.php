<?php
require_once('../partial/header.php');

?>
<div class="container p-4">
    <?php
        require_once('../database/database.php');
        $phpId = $_GET['ID'];
        $php_lessons = selectOnelesson($phpId);
        foreach ($php_lessons as $php_lesson) :
    ?>
        <form action="edit_php_model.php" method="post">
            <input type="hidden" value="<?= $php_lesson['lesson_id'] ?>" name="lesson_id">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="title" name="title" value="<?= $php_lesson['title'] ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="decription" name="desc" value="<?= $php_lesson['description'] ?>">
            </div>
            <div class="form-group">
                <input type="file" id="myFile" name="img" value="<?=$php_lesson['img'] ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
    <?php endforeach; ?>
</div>