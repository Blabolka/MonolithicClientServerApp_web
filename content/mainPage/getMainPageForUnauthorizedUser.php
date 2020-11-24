<div class="horizontalCentralizeContentMainPage">
    <div class="buttons">
        <button type="button" class="btn btn-primary" id="signIn" onClick="PopUpShow()">SIGN IN</button>
        <button type="button" class="btn btn-primary" id="signUp" onClick="document.location='../registration.html'">SIGN UP</button>
    </div>

    <?php
        require_once('../getTableWithAllUsers.php'); //print table with all users
    ?>
</div>

<div id="popUp">
    <div id="loginPopUp">
        
        <div class="form-group" id="closePopUp">
            <button class="btn btn-danger" onClick="PopUpHide()">X</button>
        </div>
        <form action="../../setSession.php" method="post">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="buttons">
                <button type="submit" class="btn btn-primary">SIGN IN</button>
            </div>
            
        </form>
        
    </div>
</div>