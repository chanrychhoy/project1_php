<?php 
    require_once('partial/header.php');
    require_once('partial/navbar.php');
    

    if(isset($_GET['page'])){
        if($_GET['page']=='home'){
            include_once('pages/home.php');
        }elseif($_GET['page']=='php'){
            include_once('pages/php.php');
        }elseif($_GET['page']=='vuejs'){
            include_once('pages/Vuejs.php');
        }else{
            include_once('pages/login.php');
        }
    }
    else{
        include_once('pages/home.php');
    }

    
?>
<?php 
    require_once('partial/footer.php');
?>
