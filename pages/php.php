<?php
require_once('partial/header.php');
require_once('partial/navbar.php');

?>
<div class="position">
    <div class="head">
        <img src="assets/images/major.jpg" alt=""  width="100%" height="350">
    </div>
    <div class="centered p-4">
        <h1>Online PHP Classes</h1>
        <div class="mr-4" style="margin-left:50px">
            <h5>Find what fascinates you as you explore these lessons in PHP class.</h5>
        </div>
    </div>
</div>
<div class="container p-4">

    <!-- button research the lesson  -->

    <form action="" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control mr-sm-2" placeholder="What do you want to learn today?" name="search_php">
            <div class="input-group-append">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </div>
        </div>
    </form>
    <!-- button create new post the lesson-->
    <div class="d-flex justify-content-end">
        <a href="php_page/create_php_html.php" class="btn btn-primary" method="post">create+</a>
    </div>


    <?php
    require_once('database/database.php');
    $list_lesson = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //search
        $list_lesson = searchTitle($_POST);
    } else {
        //select
        $list_lesson = getAllphp();
    }
    foreach ($list_lesson as $list) :
        $description = readMore($list['description'], 50);
    ?>

        <div class="card m-2 shadow-lg  bg-white rounded">
            <div class="card-body">
                <div class="d-flex ">
                    <div class="card-image mr-3 border shadow-sm  bg-white rounded">
                        <img class="img-fluid" width="200" height="200" src="<?= $list['img'] ?>" alt="image">

                    </div>
                    <div class="info">
                        <strong class="display-title"><?= $list['title'] ?></strong>
                        <p> <?= $list['date'] ?></p>
                        <p><?= $description ?>....<a href="readMore/detail_php.php?ID=<?= $list['lesson_id'] ?>">read more &#x2192;</a></p>
                    </div>
                </div>
                <div class="action  d-flex justify-content-end ">
                    <a href="php_page/edit_php_html.php?ID=<?= $list['lesson_id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                    <a href="php_page/delete_php_model.php?ID=<?= $list['lesson_id'] ?>" class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>