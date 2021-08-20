<?php
require_once('partial/header.php');
require_once('partial/navbar.php');

?>
<div class="position">
    <div class="head">
        <img src="https://www.northeastern.edu/graduate/blog/wp-content/uploads/2016/08/Online-Learning-Social-1.jpg" alt="" width="100%" height="450">
    </div>
    <div class="centered p-4">
        <h1>Online Web Development Classes</h1>
        <div class="mr-4" style="margin-left:50px">
            <h5>Find what fascinates you as you explore these web development classes.</h5>
        </div>
        <!-- button research the lesson  -->
        <form action="" method="post">
            <div class="search-container">
                <input type="text" name="search" placeholder="Search the lesson...." class="input">
                <button type="submit" class="button"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>

</div>
<strong class="d-flex justify-content-center p-4"><u>RELATED LESSONS</u></strong>

<!-- The card each post the lesson -->
<div class="allcard pt-3 row">
    <?php
    require_once('database/database.php');
    $lessons = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // search
        $lessons = search($_POST);
    } else {
        $lessons = all_lesson();
    }
    foreach ($lessons as $lesson) :
    ?>
        <div class=" col-3">
            <div class="card mb-2 ml-4 shadow-lg  bg-white rounded " style="width: 17rem; ">
                <div class="card-body">
                    <a href="readMore/detail.php?postID=<?= $lesson['lesson_id'] ?>">
                        <h5 class="card-title"><?= $lesson['title'] ?></h5>
                    </a>

                </div>
            </div>

        </div>
        
        <!-- <div class="d-flex p-2">
            <a href="readMore/detail.php?postID=<?= $lesson['lesson_id'] ?>">
                <form class="form-inline">
                    <button class="btn btn-sm btn-outline-secondary" type="button"><?= $lesson['title'] ?></button>
                </form>
            </a>
        </div> -->
    <?php endforeach; ?>
    </div>


</div>