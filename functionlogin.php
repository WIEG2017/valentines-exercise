<?php
if(!isset($_SESSION["loggedin"])){
    if(isset($_POST["username"])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    }
    $testUsername = "test";
    $testPassword = "test";


    if($_SESSION["username"] == $testUsername and $_SESSION["password"] == $testPassword ){
        $_SESSION["loggedin"] = true; 
        header("location:index.php");
        die(Wooops);
    }
}