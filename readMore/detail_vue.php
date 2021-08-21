<?php
    require_once('../partial/header.php');
   
?>
<div class="container p-4">
    
        <div class="d-flex justify-content-end">
            <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
        </div>
        <?php
            require_once('../database/database.php');
            $vueId = $_GET['postID'];
            $row_lesson = selectOnelesson_vue($vueId);
            foreach ($row_lesson as $row) :
                
        ?>

        <div class="card mb-2 shadow-lg  bg-white rounded " >
            <h1 class="card-title ml-3"><?= $row['title'] ?></h1>
            <div class="Uploadimage d-flex">
                <img class="card-img-top ml-3" src="../assets/images/<?= $row['img'] ?>" alt="image" style="width: 18rem; ">
                <div class="card-body">
                <p class="card-text"><?= $row['description'] ?></p>
       
            </div>
            
        </div>
        <p class="ml-3"> <?= $row['date'] ?></p>
        <?php endforeach; ?>
</div>
