<?php
    session_start();
    require_once('./db.php');

    $queryCheck = "SELECT id FROM users WHERE email = '{$_SESSION['email']}'";
    $resultCheck = mysqli_query($conn, $queryCheck);
    $rowCheck = mysqli_fetch_array($resultCheck);

    if($rowCheck['id'] == $_POST['id']){
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['id_role'] = $_POST['id_role'];
    }
    $queryUpdate = "UPDATE users SET first_name = '{$_POST['first_name']}', last_name = '{$_POST['last_name']}', email = '{$_POST['email']}', id_role = '{$_POST['id_role']}', password = '{$_POST['password']}' WHERE id = '{$_POST['id']}'";
    mysqli_query($conn, $queryUpdate);

    header("Location: ../content/mainPage/mainPage.php");
?>