<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../assets/css/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/horizontalCentralize.css">
</head>

<body>
    
    <div class="horizontalCentralizeContent">
        <div class="buttons">
            <?php
                session_start();

                require_once("../../database/db.php");
                
                $query = "SELECT first_name FROM users WHERE email = '{$_SESSION['email']}'";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);

                echo '<button type="button" class="btn btn-success">' .$row['first_name']. '</button>';
            ?>
            <button type="button" class="btn btn-primary" id="signOut" onClick="document.location='../../signOut.php'">SIGN OUT</button>
        </div>
        
        <?php
            require_once('../getTableWithAllUsers.php'); //print table with all users
        ?>
    </div>

</body>

</html>