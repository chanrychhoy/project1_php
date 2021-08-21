
<?php
    require_once('../partial/header.php');
?>
<div class="container p-4">
    <div class="d-flex justify-content-end">
        <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
    </div>
    <?php
    require_once('../database/database.php');
    $phpId=$_GET['ID'];
    $list_lesson=selectOnelesson($phpId);
    foreach ($list_lesson as $list) :
        
    ?>

    <div class="card m-2 shadow-lg  bg-white rounded">
        <div class="card-body">
            <div class="d-flex ">
                <div class="card-image mr-3 border shadow-sm  bg-white rounded">
                    <img class="img-fluid" width="200" height="200" src="../assets/images/<?= $list['img'] ?>" alt="image">
                </div>
                <div class="info">
                    <strong class="display-title"><?= $list['title'] ?></strong>
                    <p> <?= $list['date'] ?></p>
                    <p><?= $list['description'] ?></p>
                </div>
            </div>
            
        </div>
    </div>
    <?php endforeach; ?>
</div>
