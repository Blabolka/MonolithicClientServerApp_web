<?php
    require_once('../../database/db.php');
    
    $queryUser = "SELECT first_name, last_name, email, id_role FROM users WHERE id = '{$_GET['id']}'";
    $resultUser = mysqli_query($conn, $queryUser);
    $user = mysqli_fetch_array($resultUser);

    $queryRole = "SELECT title FROM roles WHERE id = '{$user['id_role']}'";
    $resultRole = mysqli_query($conn, $queryRole);
    $role = mysqli_fetch_array($resultRole);
?>

<div class="absoluteCentralizeContent">

    <div class="horizontalCentralizeContentProfile">
        <img src="../../assets/img/defaultUserIcon.jpg" alt="" width="150" height="150">
    </div>
    
    <form action="">
        <div class="form-group">
            <?php
                echo '<input type="text" class="form-control" name="first_name" value="' .$user['first_name']. '" readonly>';
            ?>
        </div>
        <div class="form-group">
            <?php
                echo '<input type="text" class="form-control" name="last_name" value="' .$user['last_name']. '" readonly>';
            ?>
        </div>
        <div class="form-group">
            <?php
                echo '<input type="email" class="form-control" name="email" value="' .$user['email']. '" readonly>';
            ?>
        </div>
        <div class="form-group">
            <?php
                echo '<input type="text" class="form-control" name="role_title" value="' .$role['title']. '" readonly>';
            ?>
        </div>
    </form>
</div>