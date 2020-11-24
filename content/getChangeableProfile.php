<?php
    require_once('../../database/db.php');
    
    $queryUser = "SELECT first_name, last_name, email, password, id_role FROM users WHERE id = '{$_GET['id']}'";
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
                <option value="1">User</option>
                <option value="2">Admin</option>
            </select>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" minlength="6" placeholder="Confirm password" required>
        </div>
    </form>
</div>