<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../assets/css/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/popUpLogin.css">
    <link rel="stylesheet" href="../assets/css/horizontalCentralize.css">
</head>

<body>
    
    <div class="horizontalCentralizeContent">
        <div class="buttons">
            <button type="button" class="btn btn-primary" id="signIn" onClick="PopUpShow()">SIGN IN</button>
            <button type="button" class="btn btn-primary" id="signUp" onClick="document.location='./registration.html'">SIGN UP</button>
        </div>
        
        <?php
            require_once('./getTableWithAllUsers.php'); //print table with all users
        ?>
    </div>
    
    <div id="popUp">
        <div id="loginPopUp">
            
            <div class="form-group" id="closePopUp">
                <button class="btn btn-danger" onClick="PopUpHide()">X</button>
            </div>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="firstName" placeholder="Enter Your Name" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                </div>
                <div class="buttons">
                    <button type="submit" class="btn btn-primary">SIGN IN</button>
                </div>
                
            </form>
            
        </div>
    </div>

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