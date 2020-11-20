<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "lab2db";

    $conn = mysqli_connect($servername, $username, $password, $database);


    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
?>