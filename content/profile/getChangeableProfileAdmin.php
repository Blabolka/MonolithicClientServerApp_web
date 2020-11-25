<?php
    require_once('../../database/db.php');
    
    $queryUser = "SELECT first_name, last_name, email, password, id_role, photo FROM users WHERE id = '{$_GET['id']}'";
    $resultUser = mysqli_query($conn, $queryUser);
    $user = mysqli_fetch_array($resultUser);

    $queryRole = "SELECT title FROM roles WHERE id = '{$user['id_role']}'";
    $resultRole = mysqli_query($conn, $queryRole);
    $role = mysqli_fetch_array($resultRole);
?>

<div class="absoluteCentralizeContent">

    <div class="img-group">
        <div class="horizontalCentralizeContentProfile">
            <?php
                if($user['photo'] == ''){
                    echo '<img src="../../assets/img/defaultUserIcon.jpg" alt="" width="150" height="150">';
                }else{
                    if(file_exists("../../public/images/{$user['photo']}")){
                        echo '<img src="../../public/images/' .$user['photo']. '" alt="" width="150" height="150">';
                    }else{
                        echo '<img src="../../assets/img/defaultUserIcon.jpg" alt="" width="150" height="150">';
                    }
                }
            ?>

            <form class="horizontalCentralizeContentProfile" action="../../database/updateUserPhoto.php" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile" name="fileToUpload">
                        <label class="custom-file-label" for="inputGroupFile">Choose photo</label>
                    </div>
                </div>
                <?php
                    echo '<button type="submit" class="btn btn-primary" style="width: 50%;" name="id" value="' .$_GET['id']. '">UPDATE PHOTO</button>';
                ?>
            </form>
            
        </div>
    </div>
    

    <form action="../../database/updateUserInfo.php" method="post">
        <div class="form-group">
            <?php
                echo '<input type="text" class="form-control" name="first_name" value="' .$user['first_name']. '" required>';
            ?>
        </div>
        <div class="form-group">
            <?php
                echo '<input type="text" class="form-control" name="last_name" value="' .$user['last_name']. '" required>';
            ?>
        </div>
        <div class="form-group">
            <?php
                echo '<input type="email" class="form-control" name="email" value="' .$user['email']. '" required>';
            ?>
        </div>
        <div class="form-group">
            <select class="custom-select" name="id_role" required> 
                <?php if($user['id_role'] == 1): ?>
                    <option selected value="1">User</option>
                    <option value="2">Admin</option>
                <?php elseif($user['id_role'] == 2):?>
                    <option value="1">User</option>
                    <option selected value="2">Admin</option>
                <?php endif; ?>
            </select>
        </div>
        <div class="form-group">
            <?php
                echo '<input type="text" class="form-control" name="password" id="password" value="' .$user['password']. '" minlength="6" placeholder="Password" required>';
            ?>
        </div>
        <div class="form-group">
            <?php
                echo '<input type="text" class="form-control" minlength="6" id="confirm_password" value="' .$user['password']. '" minlength="6" placeholder="Confirm password" required>';
            ?>
        </div>
        <div class="buttons">
            <?php
                echo '<button type="submit" class="btn btn-secondary" name="id" value="' .$_GET['id']. '">EDIT</button>';
            ?>
        </div>
    </form>
    
    <form action="../../database/deleteUser.php" method="post">
        <div class="buttons">
            <?php
                echo '<button type="submit" class="btn btn-danger" name="id" value="' .$_GET['id']. '">DELETE</button>';
            ?>
        </div>
    </form>
    <button class="btn btn-secondary" onClick = "document.location='../mainPage/mainPage.php'">TO MAIN PAGE</button>
</div>