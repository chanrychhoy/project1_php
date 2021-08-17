<?php
require_once('partial/header.php');
require_once('partial/navbar.php');

?>
<div class="container p-4">
    <div class="d-flex justify-content-between" >
        <form class="form-inline">
            <input class="form-control mr-sm-2 "  type="search" placeholder="What do you want to learn today? " aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <button class="btn btn-primary" type="submit">create+</button>
    </div>
    <div class="allcard d-flex m-3 p-3 ">
        <?php
        require_once('database/database.php');
        $row_lesson = getAllvue();
        foreach ($row_lesson as $row) :
        ?>
            <div class="card mr-4 " style="width: 18rem; ">
                <img class="card-img-top" src="<?= $row['img'] ?>" alt="image ">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['title'] ?></h5>
                    <p> <?= $row['date'] ?></p>
                    <p class="card-text"><?= $row['description'] ?>...<a href="#">read more &#x2192;</a></p>
                </div>
                <div class="action d-flex justify-content-end">
                    <a href="" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>


</div>