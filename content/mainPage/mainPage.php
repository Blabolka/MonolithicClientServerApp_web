<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../assets/css/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/popUpLogin.css">
    <link rel="stylesheet" href="../../assets/css/centralize.css">
</head>

<style>
    form{
        display: inline;
    }
</style>


<body>
    <?php
        session_start();

        if(array_key_exists("email", $_SESSION) && array_key_exists("id_role", $_SESSION)){
            if($_SESSION['id_role'] == 2){
                require_once('./getMainPageForAdmin.php');
            }else if($_SESSION['id_role'] == 1){
                require_once('./getMainPageForAuthorizedUser.php');
            }
        }else{
            require_once('./getMainPageForUnauthorizedUser.php');
        }
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