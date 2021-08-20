<?php 
    // connect to database
    function db(){
        return new mysqli('localhost','root','','project_programing');
    }
    //  get both lesson
    function all_lesson(){
        return db()->query("SELECT *FROM category INNER JOIN lesson ON category.cate_id=lesson.cate_id  ORDER BY lesson_id DESC ");
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
    // get only one on record by $
    function selectOnelesson($phpId){
        return db()->query("SELECT*FROM lesson WHERE lesson_id=$phpId");
    }
    // update record in php page
    function editlesson_php($value){
        $lesson_id=$value['lesson_id'];
        $title=$value['title'];
        $description=$value['desc'];
        $image=$value['img'];
        $cate_id="1";
        db()->query("UPDATE lesson SET title='$title',description='$description',img='$image',cate_id='$cate_id' WHERE lesson_id=$lesson_id ");
        header("Location: http://localhost:8080/project1_php/?page=php");

    }


    //...................vue js page..................


    // GET ALL LESSON vuejs
    function getAllvue(){
        return db()->query("SELECT * FROM category INNER JOIN lesson ON category.cate_id=lesson.cate_id where category.cate_name='Vuejs' ORDER BY lesson_id DESC ");
    }
    // create  lesson in  vuejs page
    function createlesson_vue($value){
        $title=$value['title'];
        $description=$value['desc'];
        $image=$value['img'];
        $cate_id="2";
        if ($title!="" && $description && $image !=""){
            db()->query("INSERT INTO lesson (title,img,description,cate_id) VALUES('$title','$image','$description','$cate_id')");
            header("Location: http://localhost:8080/project1_php/?page=vuejs");
        }else{
            header("Location: http://localhost:8080/project1_php/php_page/create_vuejs_html.php");
        }
    }
    // delete  lesson vue record by id 
    function deletelesson_vue($vueid){
        db()->query("DELETE FROM lesson WHERE lesson_id=$vueid ");
        header("Location: http://localhost:8080/project1_php/?page=vuejs");
    }
    // get only one on record by $
    function selectOnelesson_vue($vueId){
        return db()->query("SELECT*FROM lesson WHERE lesson_id=$vueId");
    } 
    // update record in vuejs page
    function udatelesson_vue($value){
        $lesson_id=$value['lesson_id'];
        $title=$value['title'];
        $description=$value['desc'];
        $image=$value['img'];
        $cate_id="2";
        db()->query("UPDATE lesson SET title='$title',description='$description',img='$image',cate_id='$cate_id' WHERE lesson_id=$lesson_id ");
        header("Location: http://localhost:8080/project1_php/?page=vuejs");
    }

    // research the title
    function searchTitle($title){
        $name=$title['search_php'];
        return db()->query("SELECT*FROM lesson INNER JOIN category ON lesson.cate_id=category.cate_id where category.cate_name='php' and  title LIKE '%$name%'");

    }
    function searchTitle_vue($title){
        $name=$title['search_vue'];
        return db()->query("SELECT*FROM lesson INNER JOIN category ON lesson.cate_id=category.cate_id where category.cate_name='vuejs' and  title LIKE '%$name%'");
    }
    function search($title){
        $name=$title['search'];
        return db()->query("SELECT*FROM lesson INNER JOIN category ON lesson.cate_id=category.cate_id where title LIKE '%$name%'");

    }
    //read more description
    function readMore($text,$number){
        return substr($text,0,$number);
    }
    function read_detail($text,$number){
        return substr($text,0,$number);
    }
?>