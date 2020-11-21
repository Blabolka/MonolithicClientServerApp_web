<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/popUpLogin.css">
</head>

<body>
    <button type="button" class="btn btn-primary" id="signIn" onClick="PopUpShow()">SIGN IN</button>

    <div id="popUp">
        <div id="loginPopUp">
            
            <div class="form-group" id="closePopUp">
                <button class="btn btn-secondary" onClick="PopUpHide()">X</button>
            </div>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="firstName" placeholder="Enter Your Name" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                </div>
                <button type="submit" class="btn btn-primary">SIGN IN</button>
            </form>
            
        </div>
    </div>

    <?php
        require_once('./getTableWithAllUsers.php'); //print table with all users
    ?>
</body>

<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
<script>
    $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        PopUpHide();
    });
    //Функция отображения PopUp
    function PopUpShow(){
        $("#popUp").show();
    }
    //Функция скрытия PopUp
    function PopUpHide(){
        $("#popUp").hide();
    }
</script>

</html>