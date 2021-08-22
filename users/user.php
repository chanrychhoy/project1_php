<?php
require_once('../partial/header.php');
require_once('../partial/navbar.php');

?>
<div class="img_table position-relative d-flex">
    <div class="bg-white">
        <a href="" class="m-4">ManageUser</a>
    </div>
    <div class="loginImage">
        <img src="https://aegisbiztech.com/wp-content/uploads/2016/02/BGproducts.jpg" alt="" width="100%" height="450">
    </div>
    <div class="container position-absolute fixed-top mt-3 ">
        <div class="mb-3 d-flex">
            <div class="pb-2 ml-5">
                <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
            </div>
            <a href="create_user_html.php" class="btn btn-primary ml-2" method="post">Add User</a>
        </div>
        <table class="table table-dark ml-5">
            <thead>
                <tr>
                    <th>USER NAME</th>
                    <th>PROFILE</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>UER TYPE</th>
                    <th>ACTION </th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once('../database/database.php');
                $users = getUser();
                foreach ($users as $user) :
                ?>
                    <tr>
                        <td><?= $user['user_name'] ?></td>
                        <td>
                            <img width="100" height="150" src="../assets/images/<?= $user['profile'] ?>" alt="image" class="img-fluid rounded-circle">
                        </td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['password'] ?></td>
                        <td><?= $user['userType'] ?></td>
                        <td><a href="delete_user.php?userId=<?= $user['user_id'] ?>">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>

<?php require_once('../partial/footer.php'); ?>