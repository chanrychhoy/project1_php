<?php
require_once('partial/header.php');
require_once('partial/navbar.php');

?>

<div class="img_table position-relative d-flex">


    <div class="bg-white" width="30%">
        <a href="" class="m-4">ManageUser</a>
    </div>
    <div class="loginImage">
        <img src="https://aegisbiztech.com/wp-content/uploads/2016/02/BGproducts.jpg" alt="" width="100%" height="450">
    </div>
    <div class="container position-absolute fixed-top mt-5 ">
        <div class="container p-4">
            <form action="" method="post" class=" p-2 ml-5 mr-5">
            <?php
            require_once('database/database.php');
            $user_error = "";
            $pass_error = "";
            $email_error = "";
            $userInput="";
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (empty($_POST['user'])) {
                    $user_error = "Please enter a username";
                } else {
                    $user_error = $_POST['user'];
                }
                if (empty($_POST['email'])) {
                    $email_error = "Please enter a email";
                } else {
                    $email_error = $_POST['email'];
                }
                if (empty($_POST['pass'])) {
                    $pass_error = "Please enter a password";
                } else {
                    $pass_error = $_POST['pass'];
                }
                if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['email']) ) {
                    $userInput=userlogin($_POST);
                }       

            }

            ?>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Username" name="user">
                    <small class="text-danger"><?= $user_error; ?></small>
                </div>
                <div class="form-group col-md-6">
                    <input type="email " class="form-control" placeholder="email" name="email">
                    <small class="text-danger"><?= $email_error; ?></small>
                </div>
                <div class="form-group col-md-6">
                    <input type="password" class="form-control" placeholder="Password" name="pass">
                    <small class="text-danger"><?= $pass_error; ?></small>
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
        <?php if($userInput=='correct'):?>  
            <div class=" d-flex justify-content-center">
                <a href="users/user.php" class="btn btn-success ">GO->ManageUser</a>
            </div>          
            
        <?php endif; ?>
    </div>
    

</div>