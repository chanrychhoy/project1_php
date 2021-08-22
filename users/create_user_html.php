<?php
require_once('../partial/header.php');
require_once('../partial/navbar.php');

?>

<div class="img_table position-relative d-flex">


    <div class="bg-white" width="30%">
        <a href="user.php" class="m-4">ManageUser</a>
    </div>
    <div class="loginImage">
        <img src="https://aegisbiztech.com/wp-content/uploads/2016/02/BGproducts.jpg" alt="" width="100%" height="450">
    </div>
    <div class="container position-absolute fixed-top ">
        
            <form action="create_user_model.php" method="post" class=" p-2 ml-5 mr-5 " enctype="multipart/form-data">
            <div class="container p-4">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Username" name="user">
                   
                </div>
                <div class="form-group col-md-6">
                    <input type="file" id="myFile" name="file">
                    
                </div>
                <div class="form-group col-md-6">
                    <input type="email " class="form-control" placeholder="email" name="email">
                   
                </div>
                <div class="form-group col-md-6">
                    <input type="password" class="form-control" placeholder="Password" name="pass">
                    
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Admin or user" name="userType">
                    
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary btn-block">Create</button>
                </div>
            </form>

        </div>

    </div>
</div>
<?php require_once('../partial/footer.php'); ?>