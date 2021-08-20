<?php 
    require_once('../database/database.php');
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        createlesson_vue($_POST);
    }
?>