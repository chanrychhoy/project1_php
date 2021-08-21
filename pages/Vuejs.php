<?php
require_once('partial/header.php');
require_once('partial/navbar.php');

?>
<div class="position">
    <div class="head">
        <img src="https://images.unsplash.com/photo-1533750516457-a7f992034fec?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt=""  width="100%" height="400">
    </div>
    <div class="centered p-4">
        <h1>Online Vuejs Classes</h1>
        <div class="mr-4" style="margin-left:50px">
            <h5>Find what fascinates you as you explore these lessons in Vuejs class.</h5>
        </div>
    </div>
</div>
<div class="container p-4">
    <!-- button research the lesson  -->
    <form action="" method="post">
        <div class="input-group mb-3">
            <input class="form-control mr-sm-2 " type="search" placeholder="What do you want to learn today? " name="search_vue">
            <div class="input-group-append">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </div>
        </div>
    </form>
    <!-- button create new post the lesson-->
    <div class="createPost d-flex justify-content-end">
        <a href="Vuejs_page/create_vuejs_html.php" class="btn btn-primary" method="post">Add+</a>
    </div>

    <!-- The card each post the lesson -->
    <div class="allcard pt-3 row">
        <?php
        require_once('database/database.php');
        $row_lesson="";
        if($_SERVER['REQUEST_METHOD']=='POST'){
            // search
            $row_lesson=searchTitle_vue($_POST);
        }else{
            // select
            $row_lesson = getAllvue();
        }
        foreach ($row_lesson as $row) :
            $description=readMore($row['description'], 50);
        ?>
            <div class=" col-3">
                <div class="card mb-2 shadow-lg  bg-white rounded " style="width: 17rem; ">
                    <div class=" border shadow-sm  bg-white rounded">
                        <img class="card-img-top " src="assets/images/<?= $row['img'] ?>" alt="image ">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['title'] ?></h5>
                        <p class="card-text"><?= $description?>....<a href="readMore/detail_vue.php?postID=<?= $row['lesson_id'] ?>">read more &#x2192;</a></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="ml-3"> <?= $row['date'] ?></p>
                        <div class="action">
                            <a href="Vuejs_page/update_vuejs_html.php?postID=<?= $row['lesson_id'] ?>" class="btn btn-primary btn-sm mr-2 mb-2"><i class="fa fa-pencil"></i></a>
                            <a href="Vuejs_page/delete_vuejs.php?postID=<?= $row['lesson_id'] ?>" class="btn btn-danger btn-sm mr-2 mb-2"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>

            </div>


        <?php endforeach; ?>
    </div>


</div>