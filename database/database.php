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
        $cate_id="1";
        // upload image
        $imageName=$_FILES['img']['name']; 
        $imageTmp_name=$_FILES['img']['tmp_name'];
        $imagSize=$_FILES['img']['size'];
        if ($imagSize > 525000){
            header("Location: http://localhost:8080/project1_php/php_page/create_php_html.php");  
        }else{
            $extension= pathinfo($imageName, PATHINFO_EXTENSION);
            $extensionLocal = strtolower($extension);
            $allowExtension = array('jpg', 'jpeg', 'png');
            if(in_array($extensionLocal, $allowExtension) && $title !="" && $description !=""){
                $newImageName = uniqid('php-', true) . '.' . $extensionLocal;
                $folderImage = '../assets/images/'. $newImageName;
                move_uploaded_file($imageTmp_name, $folderImage);
                db()->query("INSERT INTO lesson (title,img,description,cate_id) VALUES('$title','$newImageName','$description','$cate_id')");
                header("Location: http://localhost:8080/project1_php/?page=php");  
               
            }else{
                header("Location: http://localhost:8080/project1_php/php_page/create_php_html.php");  
            }

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
        $cate_id="1";

        $imageName=$_FILES['img']['name']; 
        $imageTmp_name=$_FILES['img']['tmp_name'];
        $imagSize=$_FILES['img']['size'];
        if ($imagSize > 525000){
            header("Location: http://localhost:8080/project1_php/php_page/create_php_html.php");  
        }else{
            $extension= pathinfo($imageName, PATHINFO_EXTENSION);
            $extensionLocal = strtolower($extension);
            $allowExtension = array('jpg', 'jpeg', 'png');
            if(in_array($extensionLocal, $allowExtension)){
                $newImageName = uniqid('php-', true) . '.' . $extensionLocal;
                $folderImage = '../assets/images/'. $newImageName;
                move_uploaded_file($imageTmp_name, $folderImage);
                db()->query("UPDATE lesson SET title='$title',description='$description',img='$newImageName',cate_id='$cate_id' WHERE lesson_id=$lesson_id ");
                header("Location: http://localhost:8080/project1_php/?page=php");
            }else{
                header("Location: http://localhost:8080/project1_php/?page=php");
                
            }
        
        }   

     

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
        $cate_id="2";

        $imageName=$_FILES['img']['name']; 
        $imageTmp_name=$_FILES['img']['tmp_name'];
        $imagSize=$_FILES['img']['size'];

        if  ($imagSize <525000){
            $extension= pathinfo($imageName, PATHINFO_EXTENSION);
            $extensionLocal = strtolower($extension);
            $allowExtension = array('jpg', 'jpeg', 'png');
            if(in_array($extensionLocal, $allowExtension)&& $title!="" && $description!=""){
                $newImageName = uniqid('vue-', true) . '.' . $extensionLocal;
                $folderImage = '../assets/images/'. $newImageName;
                move_uploaded_file($imageTmp_name, $folderImage);
                db()->query("INSERT INTO lesson (title,img,description,cate_id) VALUES('$title','$newImageName','$description','$cate_id')");
                header("Location: http://localhost:8080/project1_php/?page=vuejs");
            }else{
                header("Location: http://localhost:8080/project1_php/Vuejs_page/create_vuejs_html.php");
            }
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
        $cate_id="2";

        $imageName=$_FILES['img']['name']; 
        $imageTmp_name=$_FILES['img']['tmp_name'];
        $imagSize=$_FILES['img']['size'];
        if($imagSize < 525000){
            $extension= pathinfo($imageName, PATHINFO_EXTENSION);
            $extensionLocal = strtolower($extension);
            $allowExtension = array('jpg', 'jpeg', 'png');
            if(in_array($extensionLocal, $allowExtension) && $title!="" && $description!=""){
                $newImageName = uniqid('vue-', true) . '.' . $extensionLocal;
                $folderImage = '../assets/images/'. $newImageName;
                move_uploaded_file($imageTmp_name, $folderImage);
                db()->query("UPDATE lesson SET title='$title',description='$description',img='$newImageName',cate_id='$cate_id' WHERE lesson_id=$lesson_id ");
                header("Location: http://localhost:8080/project1_php/?page=vuejs");
            }else{
                header("Location: http://localhost:8080/project1_php/?page=vuejs");
            }
        }
     
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

    //.......... pagination feature.........
    function getPost(){
        // define how many result per page
        $results_per_page  = 8;

        $pagePagination = 0;
        isset($_GET['page_show_pagi']) ? $pagePagination= $_GET['page_show_pagi'] :  $pagePagination = 0;

        if( $pagePagination > 1){
            $start = ( $pagePagination * $results_per_page ) - $results_per_page ;
        }else{
            $start=0;
        }
        $data=db()->query("SELECT * FROM lesson LIMIT $start, $results_per_page ");
        return $data;
    }

    function getTotalPage(){
        // define how many result per page
        $results_per_page = 8;

        $pagePagination = 0;
        isset($_GET['page_show_pagi']) ? $pagePagination= $_GET['page_show_pagi'] : $pagePagination = 0 ;
        if ($pagePagination > 1){
            $start = ($pagePagination * $results_per_page ) - $results_per_page ;
        }else{
            $start = 0; 
        }

        $data = db()-> query("SELECT lesson_id FROM lesson");
        $numRow = $data -> num_rows;
        
        $totalPage = $numRow / $results_per_page ;
        return $totalPage;
    }
?>