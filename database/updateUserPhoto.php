<?php
    session_start();
    require_once('./db.php');

    $target_dir = "../public/images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        $uploadOk = 0;
    }
    
    if ($uploadOk == 1) {
        if (!file_exists($target_file)) {
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        }
        $query = "UPDATE users SET photo = '" .basename($_FILES["fileToUpload"]["name"]). "' WHERE id = '{$_POST['id']}'";
        mysqli_query($conn, $query);   
    }

    header("Location: ../content/profile/profile.php?id={$_POST['id']}");
?>