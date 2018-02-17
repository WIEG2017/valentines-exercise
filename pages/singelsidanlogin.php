<?php
    session_start();
    if(isset($_SESSION["loginSingel"])){
        header('location: singelsidan.php');
      
    }
    
    include '../include/data.php';
    
    login($logins);
    
    
    
    include '../include/header.php';

    
?>


    <div id = "login">
        <form id = "singelS" method="POST">
            <h4>Användarnamn:</h4><input type = "text" name = "user"></br>
            <h4>Lösenord:</h4><input type = "password" name = "password"></br></br>
            <button class = "login" type = "submit" name="login">Login</button>
        </form>
    </div>    





<?php
    include '../include/footer.php';
?>    