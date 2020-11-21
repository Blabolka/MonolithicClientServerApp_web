<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../assets/css/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/horizontalCentralize.css">
</head>

<body>
    
    <div class="horizontalCentralizeContent">
        <div class="buttons">
            <button type="button" class="btn btn-primary" id="signOut">SIGN OUT</button>
        </div>
        
        <?php
            require_once('./getTableWithAllUsers.php'); //print table with all users
        ?>
    </div>

</body>

</html>