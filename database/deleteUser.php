<?php
    session_start();
    require_once('./db.php');

    $queryCheck = "SELECT id FROM users WHERE email = '{$_SESSION['email']}'";
    $resultCheck = mysqli_query($conn, $queryCheck);
    $rowCheck = mysqli_fetch_array($resultCheck);

    if($rowCheck['id'] == $_POST['id']){
        unset($_SESSION['email']);
        unset($_SESSION['id_role']);
    }
    $queryDelete = "DELETE FROM users WHERE id = '{$_POST['id']}'";
    mysqli_query($conn, $queryDelete);

    header("Location: ../content/mainPage/mainPage.php");

    

    

    
?>