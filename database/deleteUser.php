<?php
    session_start();
    require_once('./db.php');
    
    $query = "DELETE FROM users WHERE id = '{$_POST['id']}'";
    mysqli_query($conn, $query);

    header("Location: ../content/mainPage/mainPage.php");
?>