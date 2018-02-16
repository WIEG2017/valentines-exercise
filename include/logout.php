<?php
session_start();

if($_POST["logout"] = true){
            
    $_SESSION['userLoggedIn'] = false;
    unset($_POST["logout"]);
    unset($_SESSION['FirstVisit']);
    header('location: ../pages/singelsidanlogin.php'); 
    die();
}