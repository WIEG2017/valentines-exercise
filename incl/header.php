<?php
    session_start();
    require "data.php";
    require 'classes.php';
    $theCart = new Cart();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <title>Valentines Day Shop ❣️ <?php if(isset($page_title)) { echo $page_title; } ?></title>
    </head>
    <body>
        <header>
            <ul style="opacity: 1; color: white; background: url('images/black.jpeg')fixed;">
                <li><a href="index.php">Start</a></li>
                <li><a href="produkter.php">Produkter</a></li>
                <li><a href="about.php">Om Oss</a></li>
                <li><a href="contact.php">Kontakt</a></li>
                <li><a href="signup.php">Skapa Konto</a></li>
                <li style="float:right; width: 10%;"><a class="active" href="login.php">Logga in</a></li>
                <li><a href="#">Medlemssida</a></li>
                <li><a href="#">Kundvagn<?php
                    $temp = $theCart->getQuantities();
                    if($temp) echo " ($temp)"; unset($temp);
                 ?></a></li>
            </ul>
        </header>


