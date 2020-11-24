<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../assets/css/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/centralize.css">
</head>

<style>
    img{
        border: 1px solid #000000;
    }
</style>
<body>
    <?php
        session_start();

        if(array_key_exists("email", $_SESSION) && array_key_exists("id_role", $_SESSION)){
            if($_SESSION['id_role'] == 2){
                require_once('./getChangeableProfile.php');
            }else if($_SESSION['id_role'] == 1){
                
                require_once('../../database/db.php');
                $query = "SELECT id FROM users WHERE email = '{$_SESSION['email']}'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);
                
                if($_GET['id'] == $row['id']){
                    require_once('./getChangeableProfile.php');
                }else{
                    require_once('./getUnchangeableProfile.php');
                }

            }
        }else{
            require_once('./getUnchangeableProfile.php');
        }
    ?>
</body>
</html>