<?php
    session_start();
    require_once("./db.php");

    $queryCheck = "SELECT email FROM users WHERE email = '{$_POST['email']}'";
    $resultCheck = mysqli_query($conn, $queryCheck);
    $count = mysqli_num_rows($resultCheck);

    if($count > 0){
        header("Location: ../content/registration/registration.html");
    }else{
        $queryInsert = "INSERT INTO users (first_name, last_name, email, password, id_role) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '{$_POST['password']}', '{$_POST['id_role']}')";
        mysqli_query($conn, $queryInsert);
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['id_role'] = $_POST['id_role'];

        header("Location: ../content/mainPage/mainPage.php");
    }
?>