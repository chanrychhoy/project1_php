<?php
    require_once('../database/database.php');
    $userid=$_GET['userId'];
    deleteUser($userid);
    
?>