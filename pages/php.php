<?php
require_once('partial/header.php');
require_once('partial/navbar.php');

?>
<div class="container p-4">
    <div class="d-flex justify-content-between">
        <!-- button research the lesson  -->
        <form class="form-inline">
            <input class="form-control mr-sm-2 " type="search" placeholder="What do you want to learn today? " aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <!-- buton create new post the lesson-->
        <div class="">
            <a href="php_page/create_php_html.php" class="btn btn-primary" method="post">create+</a>
        </div>
    </div>
    <?php
    require_once('database/database.php');
    $list_lesson = getAllphp();
    foreach ($list_lesson as $list) :
    ?>
        <div class="card m-2 shadow-lg  bg-white rounded">
            <div class="card-body">
                <div class="d-flex ">
                    <div class="card-image mr-3 border shadow-sm  bg-white rounded">
                        <img class="img-fluid" width="200" height="200" src="<?= $list['img'] ?>" alt="">

                    </div>
                    <div class="info">
                        <strong class="display-title"><?= $list['title'] ?></strong>
                        <p> <?= $list['date'] ?></p>
                        <p><?= $list['description'] ?>... <a href="#">read more &#x2192;</a></p>
                    </div>
                </div>
                <div class="action d-flex justify-content-end">
                    <a href="" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                    <a href="php_page/delete_php_model.php?ID=<?=$list['lesson_id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>