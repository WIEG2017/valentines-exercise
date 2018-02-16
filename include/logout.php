<?php
if($_POST["logout"] = true){
            
    $_SESSION['userLoggerIn'] = false;
    unset($_POST["logout"]);
    header('location: ../pages/singelsidanlogin.php');
    die();
}