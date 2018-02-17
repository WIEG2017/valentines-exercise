<?php
session_start();

if($_POST["logout"] = true){
            
    $_SESSION['userLoggedIn'] = false;
    unset($_POST["logout"]);
    unset($_SESSION['FirstVisit']);
    unset($_SESSION["loginSingel"]);
    header('location: ../pages/singelsidanlogin.php'); 
    die();
}