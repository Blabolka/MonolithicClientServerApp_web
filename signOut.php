<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['id_role']);
    session_destroy();
    header("Location: ./content/mainPage/mainPageForUnauthorizedUser.php");
?>