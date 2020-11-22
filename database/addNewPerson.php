<?php
    session_start();
    require_once("./db.php");

    $query = "INSERT INTO users (first_name, last_name, email, password, id_role) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '{$_POST['password']}', '{$_POST['id_role']}')";
    mysqli_query($conn, $query);

    $_SESSION['email'] = $_POST['email'];
    header("Location: ../content/mainPage/mainPageForAuthorizedUser.php");
?>