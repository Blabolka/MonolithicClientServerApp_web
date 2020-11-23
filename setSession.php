<?php
    session_start();
    require_once("./database/db.php");

    $query = "SELECT email, id_role FROM users WHERE email='{$_POST['email']}' AND password='{$_POST['password']}'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if($count > 0){
        $row = mysqli_fetch_array($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['id_role'] = $row['id_role'];

        if($_SESSION['id_role'] == 1){
            header("Location: ./content/mainPage/mainPageForAuthorizedUser.php");
        }else if($_SESSION['id_role'] == 2){
            header("Location: ./content/mainPage/mainPageForAdmin.php");
        }
        
    }else{
        header("Location: ./content/mainPage/mainPageForUnauthorizedUser.php");
    }
?>