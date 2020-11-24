<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['id_role']);
    header("Location: ./content/mainPage/mainPage.php");
?>