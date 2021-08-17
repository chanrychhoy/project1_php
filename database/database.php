<?php 
    // connect to database
    function db(){
        return new mysqli('localhost','root','','project_programing');
    }
    // GET ALL LESSON PHP
    function getAllphp(){
        return db()->query("SELECT *FROM category INNER JOIN lesson ON category.cate_id=lesson.cate_id where category.cate_name='php' ORDER BY lesson_id DESC ");
    }
    // create  lesson
    function createLesson_php($value){
        $title=$value['title'];
        $description=$value['desc'];
        $image=$value['img'];
        $cate_id="1";
        if ($title!="" && $description && $image !=""){
            db()->query("INSERT INTO lesson (title,img,description,cate_id) VALUES('$title','$image','$description','$cate_id')");
            header("Location: http://localhost:8080/project1_php/?page=php");
        }else{
            header("Location: http://localhost:8080/project1_php/php_page/create_php_html.php");
        }
    }
    // delete  lesson php record by id
    function deletelesson_php($phpid){
         db()->query("DELETE FROM lesson WHERE lesson_id=$phpid ");
         header("Location: http://localhost:8080/project1_php/?page=php");
    }
       // GET ALL LESSON vuejs
    function getAllvue(){
        return db()->query("SELECT * FROM category INNER JOIN lesson ON category.cate_id=lesson.cate_id where category.cate_name='Vuejs' ");
    }

?>