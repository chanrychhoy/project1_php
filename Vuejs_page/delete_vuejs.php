<?php
    require_once('../database/database.php');
    $vueid=$_GET['postID'];
    deletelesson_vue($vueid);
?>