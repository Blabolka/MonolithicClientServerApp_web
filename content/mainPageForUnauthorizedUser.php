<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/popUpLogin.css">
</head>

<body>
    <button class="btn btn-primary" id="login" onClick="PopUpShow()">LOGIN</button>

    <div id="popUp">
        <div id="loginPopUp">
            
            <div class="form-group" id="closePopUp">
                <button class="btn btn-secondary" onClick="PopUpHide()">X</button>
            </div>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="firstName" placeholder="Enter Your Name" required>
                </div>
                <div>
                    <input type="password" class="form-control" name="password" placeholder="Password" minlenght="6" required>
                </div>
                <button type="submit" class="btn btn-primary">LOGIN</button>
            </form>
        </div>
    </div>

    <?php
        require_once('./getTableWithAllUsers.php'); //print table with all users
    ?>
</body>

<script>
    //Function to show PopUp
    function PopUpShow(){
        document.getElementById("popUp").style.visibility = "visible";
    }
    //Function to hide PopUp
    function PopUpHide(){
        document.getElementById("popUp").style.visibility = "hidden";
    }
</script>

</html>